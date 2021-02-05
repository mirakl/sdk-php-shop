<?php
namespace Mirakl;

use Mirakl\Core\Domain\FileWrapper;
use Psr\Http\Message\ResponseInterface;

/**
 * @param   array   $a1
 * @param   array   $a2
 * @return  array
 */
if (!function_exists('\Mirakl\array_diff_key_recursive')) {
    function array_diff_key_recursive(array $a1, array $a2)
    {
        $diff = array_diff_key($a1, $a2);
        foreach (array_intersect_key($a1, $a2) as $k => $v) {
            if (is_array($a1[$k]) && is_array($a2[$k])) {
                $d = array_diff_key_recursive($a1[$k], $a2[$k]);
                if ($d) {
                    $diff[$k] = $d;
                }
            }
        }

        return $diff;
    }
}

/**
 * Checks if given array is an associative or a sequential array
 *
 * @param   $array
 * @return  bool
 */
if (!function_exists('\Mirakl\array_is_assoc')) {
    function array_is_assoc($array)
    {
        // Keys of the array
        $keys = array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return array_keys($keys) !== $keys;
    }
}

/**
 * Maps original array keys against given mapping
 *
 * @param   array   $data
 * @param   array   $mapping
 * @return  array
 */
if (!function_exists('\Mirakl\array_map_keys')) {
    function array_map_keys(array $data, array $mapping)
    {
        if (empty($mapping)) {
            return $data;
        }

        $values = $map = [];
        foreach ($mapping as $src => $dest) {
            // Handle sources
            $value = $data;
            $keys = explode('/', $src);
            foreach ($keys as $key) {
                if (!isset($value[$key])) {
                    continue 2;
                }
                $value = $value[$key];
            }

            // Handle destinations
            $keys = explode('/', $dest);
            foreach (array_reverse($keys) as $key) {
                $value = [$key => $value];
            }
            $values = array_merge_recursive($values, (array) $value);
            unset($data[$src]);

            // Build a map to make a diff later
            $value = $dest;
            $keys = explode('/', $src);
            if (count($keys) > 1 || $keys[0] != $value) {
                foreach (array_reverse($keys) as $key) {
                    $value = [$key => $value];
                }
                $map = array_merge_recursive($map, (array) $value);
            }
        }

        $data = array_merge_recursive($data, $values);
        $data = array_diff_key_recursive($data, $map);

        return $data;
    }
}

/**
 * Formats string values to corresponding types (bool, int, float)
 *
 * @param   array   $array
 * @return  array
 */
if (!function_exists('\Mirakl\array_format')) {
    function array_format(array $array)
    {
        foreach ($array as $key => $value) {
            if ($value === 'true' || $value === 'false') {
                $array[$key] = $value === 'true';
            } elseif (is_string($value) && is_numeric($value) && ('0' !== $value[0] || !ctype_digit($value))) {
                $array[$key] = $value + 0; // Converts string to numeric value (int or float)
            }
        }

        return $array;
    }
}

/**
 * Creates a file from different sources
 *
 * @param   string|array|\SplFileObject $file
 * @return  \SplFileObject
 * @throws  \InvalidArgumentException
 */
if (!function_exists('\Mirakl\create_file')) {
    function create_file($file)
    {
        if (is_string($file)) {
            // File has been specified as file contents
            $file = create_temp_file($file);
        } elseif (is_array($file)) {
            // File has been specified as CSV data array
            $file = create_temp_csv_file($file);
        } elseif (!$file instanceof \SplFileObject) {
            // Otherwise, file has to be specified as \SplFileObject
            throw new \InvalidArgumentException('Specified file is not valid');
        }

        return $file;
    }
}

/**
 * Creates a temporary file filled with specified contents
 *
 * @param   string  $contents
 * @return  \SplTempFileObject
 */
if (!function_exists('\Mirakl\create_temp_file')) {
    function create_temp_file($contents)
    {
        $file = new \SplTempFileObject();
        $file->fwrite($contents);
        $file->rewind();

        return $file;
    }
}

/**
 * Creates a temp CSV file from specified array.
 * Columns have to be specified manually as first element if needed.
 *
 * @param   array   $data
 * @param   string  $separator
 * @param   string  $enclosure
 * @return  \SplTempFileObject
 */
if (!function_exists('\Mirakl\create_temp_csv_file')) {
    function create_temp_csv_file(array $data, $separator = ';', $enclosure = '"')
    {
        $file = new \SplTempFileObject();
        $file->setFlags(\SplFileObject::READ_CSV);
        $file->setCsvControl($separator, $enclosure);
        foreach ($data as $fields) {
            $file->fputcsv($fields);
        }
        $file->rewind();

        return $file;
    }
}

/**
 * @param   \DateTime   $date
 * @return  string
 */
if (!function_exists('\Mirakl\date_format')) {
    function date_format(\DateTime $date)
    {
        return $date->setTimezone(new \DateTimeZone('GMT'))
            ->format(\DateTime::ISO8601);
    }
}

/**
 * Returns default User-Agent of Mirakl PHP SDK
 *
 * @param   string  $suffix
 * @return  string
 */
if (!function_exists('\Mirakl\default_user_agent')) {
    function default_user_agent($suffix = '')
    {
        $userAgent = 'Mirakl-PHP-SDK/' . get_version();

        if ($suffix) {
            $userAgent .= ' ' . ltrim($suffix, ' ');
        }

        return $userAgent;
    }
}

/**
 * Returns current version of the Mirakl PHP SDK
 *
 * @return  string
 */
if (!function_exists('\Mirakl\get_version')) {
    function get_version()
    {
        static $version;

        if (!$version) {
            $file = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'composer.json';
            preg_match('#"version":\s+"(\d+\.\d+\.\d+-?.*)"#', file_get_contents($file), $matches);
            $version = isset($matches[1]) ? $matches[1] : 'Unknown Version';
        }

        return $version;
    }
}

/**
 * Converts undescore string to Pascal Case
 * For example: 'my_class' to 'MyClass'
 *
 * @param   string  $str
 * @return  string
 */
if (!function_exists('\Mirakl\pascalize')) {
    function pascalize($str)
    {
        return str_replace(' ', '', ucwords(strtr($str, '_-', '  ')));
    }
}

/**
 * Converts word into the underscore format
 * For example 'CustomValue' becomes 'custom_value'
 *
 * @param   string  $str
 * @return  string
 */
if (!function_exists('\Mirakl\underscorize')) {
    function underscorize($str)
    {
        return strtolower(trim(preg_replace('/([A-Z]|[0-9]+)/', "_$1", $str), '_'));
    }
}

/**
 * Converts specified response to a readable/downloadable file
 *
 * @param   ResponseInterface   $response
 * @param   string              $extension
 * @return  FileWrapper
 */
if (!function_exists('\Mirakl\parse_file_response')) {
    function parse_file_response(ResponseInterface $response, $extension)
    {
        $contents = trim((string) $response->getBody());

        $file = (new FileWrapper($contents))->setFileExtension($extension);
        if ($extension == 'csv') {
            $file->getFile()->setFlags(\SplFileObject::READ_CSV);
            $file->getFile()->setCsvControl(';');
        }

        if ($contentType = $response->getHeaderLine('Content-Type')) {
            $file->setContentType($contentType);
        }

        if ($contentDisposition = $response->getHeaderLine('Content-Disposition')) {
            preg_match('#.*filename="(.*)"$#i', $contentDisposition, $matches);
            if (!empty($matches) && isset($matches[1])) {
                $file->setFileName($matches[1]);
                $file->setFileExtension(pathinfo($matches[1], PATHINFO_EXTENSION), false);
            }
        }

        return $file;
    }
}

/**
 * Converts specified JSON response to array
 *
 * @param   ResponseInterface   $response
 * @param   bool                $assoc
 * @return  array|\stdClass
 * @throws  \InvalidArgumentException
 */
if (!function_exists('\Mirakl\parse_json_response')) {
    function parse_json_response(ResponseInterface $response, $assoc = true)
    {
        return \GuzzleHttp\json_decode((string) $response->getBody(), $assoc);
    }
}

/**
 * Converts specified XML response to array
 *
 * @param   ResponseInterface   $response
 * @param   bool                $assoc
 * @return  array|\stdClass
 * @throws  \InvalidArgumentException
 */
if (!function_exists('\Mirakl\parse_xml_response')) {
    function parse_xml_response(ResponseInterface $response, $assoc = true)
    {
        $json = null;

        $xml = simplexml_load_string($response->getBody(), 'SimpleXMLElement', LIBXML_NOCDATA);
        if ($xml === false) {
            throw new \InvalidArgumentException('XML can not be read');
        }
        $json = \GuzzleHttp\json_encode($xml);

        return \GuzzleHttp\json_decode($json, $assoc);
    }
}

/**
 * Formats references associative array to query parameter
 *
 * @param   array   $data
 * @param   string  $entrySeparator
 * @param   string  $refSeperator
 * @return  string
 */
if (!function_exists('\Mirakl\refs_to_query_param')) {
    function refs_to_query_param(array $data, $entrySeparator = '|', $refSeperator = ',')
    {
        $params = [];
        foreach ($data as $key => $values) {
            $values = (array) $values;
            foreach ($values as $value) {
                $params[] = $key . $entrySeparator . $value;
            }
        }

        return implode($refSeperator, $params);
    }
}

/**
 * Formats multiple array values to query parameter
 *
 * @param   array   $data
 * @param   string  $entrySeparator
 * @param   string  $refSeperator
 * @return  string
 */
if (!function_exists('\Mirakl\tuples_to_query_param')) {
    function tuples_to_query_param(array $data, $entrySeparator = '|', $refSeperator = ',')
    {
        $params = [];
        foreach ($data as $values) {
            $params[] = implode($entrySeparator, (array) $values);
        }

        return implode($refSeperator, $params);
    }
}