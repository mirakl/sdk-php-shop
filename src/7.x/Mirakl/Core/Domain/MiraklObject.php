<?php
namespace Mirakl\Core\Domain;

use Mirakl\Core\Domain\Collection\MiraklCollection;

class MiraklObject implements ArrayableInterface, \IteratorAggregate
{
    use DateFieldsTrait;
    use DataObjectTrait;

    /**
     * Array that will be used for aliasing data keys of current object
     * For example:
     * With:
     * $mapping = [
     *     'product_sku' => 'product/sku'
     * ]
     * Before map():
     * $data = [
     *     'product_sku' => 'SKU-1234'
     * ];
     * After map():
     * $data = [
     *     'product' => [
     *         'sku' => 'SKU-1234'
     *     ]
     * ]
     *
     * @var array
     */
    protected static $mapping = [];

    /**
     * Array of key => callable static method to call when setting data
     * For example:
     * [
     *     'foo' => [MiraklObject::class, 'create'] // will transform an array into MiraklObject for key 'foo'
     * ];
     *
     * @see setData()
     * @var array
     */
    protected static $dataTypes = [];

    /**
     * @param   array   $data
     */
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->setData($data);
        }
    }

    /**
     * Cleans up data by removing null values
     *
     * @return  void
     */
    public function cleanup()
    {
        // Remove null values
        $this->data = array_filter($this->data, function($val) {
            return null !== $val;
        });
    }

    /**
     * Useful method for requests returning domain objects
     *
     * @return  \Mirakl\Core\Response\Decorator\MiraklObject
     */
    public static function decorator()
    {
        return new \Mirakl\Core\Response\Decorator\MiraklObject(static::class);
    }

    /**
     * Creates a collection of current object
     *
     * @param   array   $items
     * @return  MiraklCollection
     */
    public static function getCollection(array $items = [])
    {
        $collection = new MiraklCollection();
        $collection->setItemClass(get_called_class());
        foreach ($items as $item) {
            $collection->add(is_object($item) ? $item : static::create($item));
        }

        return $collection;
    }

    /**
     * Returns all merged $dataTypes properties
     *
     * @return  array
     */
    public static function getDataTypes()
    {
        static $dataTypesCache = [];
        $class = $parent = get_called_class();
        if (!isset($dataTypesCache[$class])) {
            $dataTypes = [];
            do {
                if ($dataTypesParent = @get_class_vars($parent)['dataTypes']) {
                    $dataTypes += $dataTypesParent;
                }
            } while ($parent = get_parent_class($parent));
            $dataTypesCache[$class] = $dataTypes;
        }

        return $dataTypesCache[$class];
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * @inheritdoc
     */
    public function setData($key, $value = null)
    {
        if (is_array($key)) {
            $this->setDataArray($key);
        } else {
            $this->setDataValue($key, $value);
        }

        $this->cleanup();

        return $this;
    }

    /**
     * Sets array of data to current object after doing a map on it
     *
     * @param   array   $data
     * @return  $this
     */
    private function setDataArray(array $data)
    {
        $data = static::map($data);
        foreach ($data as $key => $value) {
            $method = 'set' . \Mirakl\pascalize($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            } else {
                $this->setDataValue($key, $value);
            }
        }

        return $this;
    }

    /**
     * Associates value to key after doing a map on key and validation on value
     *
     * @param   string  $key
     * @param   mixed   $value
     * @return  $this
     */
    private function setDataValue($key, $value)
    {
        if (null !== $value) {
            $this->data[$key] = static::value($key, $value); // value has to be transformed and validated
        }

        return $this;
    }

    /**
     * @param   array   $data
     * @return  array
     */
    public static function map(array $data)
    {
        return \Mirakl\array_map_keys($data, static::$mapping);
    }

    /**
     * @param   array   $data
     * @return  array
     */
    public static function unmap(array $data)
    {
        return \Mirakl\array_map_keys($data, array_flip(static::$mapping));
    }

    /**
     * @return  array
     */
    public function wrap()
    {
        return static::map($this->toArray());
    }

    /**
     * @return  array
     */
    public function unwrap()
    {
        return static::unmap($this->toArray());
    }

    /**
     * Transforms data value according to $dataTypes and $dateFields properties
     *
     * @param   string  $key
     * @param   mixed   $value
     * @return  mixed
     */
    public static function value($key, $value)
    {
        if (is_string($value) && in_array($key, self::$dateFields)) {
            $value = new \DateTime($value);
        } else {
            $dataTypes = static::getDataTypes();
            if (isset($dataTypes[$key])) {
                $callable = $dataTypes[$key];
                if (!is_object($value)) {
                    $value = forward_static_call($callable, $value);
                } elseif (!$value instanceof $callable[0]) {
                    throw new \InvalidArgumentException(
                        sprintf('%s must be an instance of %s', $key, $callable[0])
                    );
                }
            }
        }

        return $value;
    }
}