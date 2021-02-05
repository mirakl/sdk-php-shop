<?php
namespace Mirakl\Core\Domain;

trait DataObjectTrait
{
    /**
     * Object attributes
     *
     * @var array
     */
    protected $data = [];

    /**
     * Set/Get attribute wrapper
     *
     * @param   string  $method
     * @param   array   $args
     * @return  mixed
     * @throws  \InvalidArgumentException
     */
    public function __call($method, $args)
    {
        $key = \Mirakl\underscorize(substr($method, 3));
        switch (substr($method, 0, 3)) {
            case 'get':
                return $this->getData($key);
            case 'set':
                return $this->setData($key, isset($args[0]) ? $args[0] : null);
            case 'uns':
                return $this->unsetData($key);
            case 'has':
                return $this->hasData($key);
        }

        // Handle boolean check on keys
        if (substr($method, 0, 2) === 'is') {
            return (bool) $this->getData(\Mirakl\underscorize(substr($method, 2)));
        }

        throw new \InvalidArgumentException(
            sprintf('Invalid method %s::%s(%s)', get_class($this), $method, print_r($args, true))
        );
    }

    /**
     * Proxy to toJSON() method
     *
     * @return  string
     */
    public function __toString()
    {
        return $this->toJSON();
    }

    /**
     * Useful method to create object quickly
     *
     * @param   array   $data
     * @return  $this
     */
    public static function create(array $data = [])
    {
        return (new static)->setData($data);
    }

    /**
     * Get value from data array
     *
     * @param   mixed   $key
     * @return  mixed
     */
    public function getData($key = null)
    {
        if (null === $key) {
            return $this->data;
        }

        if (is_array($key)) {
            $data = [];
            foreach ($key as $k) {
                if (isset($this->data[$k])) {
                    $data[$k] = $this->data[$k];
                }
            }

            return $data;
        }

        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    /**
     * Checks if current object has a value for the given key
     *
     * @param   string  $key
     * @return  bool
     */
    public function hasData($key)
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * Overwrite data in the object
     *
     * The $key parameter can be string or array
     * If $key is a string, the attribute value will be overwritten by $value
     *
     * If $key is an array, it will overwrite all the data in the object
     *
     * @param   string|array  $key
     * @param   mixed         $value
     * @return  $this
     */
    public function setData($key, $value = null)
    {
        if (is_array($key)) {
            $this->data = $key;
        } else {
            $this->data[$key] = $value;
        }

        return $this;
    }

    /**
     * Converts object data to array
     *
     * @return  array
     */
    public function toArray()
    {
        $result = [];
        foreach ($this->data as $key => $value) {
            if (is_float($value)) {
                $value = sprintf('%.4F', $value);
            } elseif ($value instanceof \DateTime) {
                $value = \Mirakl\date_format($value);
            } elseif (is_object($value) && $value instanceof ArrayableInterface) {
                $value = $value->toArray();
            }
            $result[$key] = $value;
        }

        return $result;
    }

    /**
     * Converts object data to JSON
     *
     * @return  string
     */
    public function toJSON()
    {
        return json_encode($this->toArray());
    }

    /**
     * Unset data from the object
     *
     * @param   null|string|array $key
     * @return  $this
     */
    public function unsetData($key = null)
    {
        if ($key === null) {
            $this->data = [];
        } elseif (is_string($key)) {
            unset($this->data[$key]);
        } elseif (is_array($key)) {
            foreach ($key as $k) {
                $this->unsetData($k);
            }
        }

        return $this;
    }

    /**
     * Loop through current object data and apply a callback function on each value
     *
     * @param   callable    $callback
     * @param   array       $keys
     * @param   array       $args
     * @param   bool        $notNull
     * @return  array
     */
    public function walk(callable $callback, array $keys = [], array $args = [], $notNull = true)
    {
        $result = [];
        foreach ($this->getData($keys) as $key => $value) {
            if (!$notNull || null !== $value) {
                $result[$key] = call_user_func_array($callback, array_merge([$value], $args));
            }
        }

        return $result;
    }
}