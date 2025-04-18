<?php

declare(strict_types=1);

namespace Mirakl;

use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Response\FilenameParser;
use Mirakl\Core\Stream\SplFileStream;
use Psr\Http\Message\ResponseInterface;

if (!function_exists('\Mirakl\array_diff_key_recursive')) {
    /**
     * @param array $a1
     * @param array $a2
     * @return array
     */
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

if (!function_exists('\Mirakl\array_is_assoc')) {
    /**
     * Checks if given array is an associative or a sequential array
     *
     * @param array $array
     * @return bool
     */
    function array_is_assoc($array)
    {
        // Keys of the array
        $keys = array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return array_keys($keys) !== $keys;
    }
}

if (!function_exists('\Mirakl\array_map_keys')) {
    /**
     * Maps original array keys against given mapping
     *
     * @param array $data
     * @param array $mapping
     * @return array
     */
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

if (!function_exists('\Mirakl\array_format')) {
    /**
     * Formats string values to corresponding types (bool, int, float)
     *
     * @param array $array
     * @return array
     */
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

if (!function_exists('\Mirakl\create_file')) {
    /**
     * Creates a file from different sources
     *
     * @param string|array|\SplFileObject $file
     * @return \SplFileObject
     * @throws \InvalidArgumentException
     */
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

if (!function_exists('\Mirakl\create_temp_file')) {
    /**
     * Creates a temporary file filled with specified contents
     *
     * @param string $contents
     * @return \SplTempFileObject
     */
    function create_temp_file($contents)
    {
        $file = new \SplTempFileObject();
        $file->fwrite($contents);
        $file->rewind();

        return $file;
    }
}

if (!function_exists('\Mirakl\create_temp_csv_file')) {
    /**
     * Creates a temp CSV file from specified array.
     * Columns have to be specified manually as first element if needed.
     *
     * @param array  $data
     * @param string $separator
     * @param string $enclosure
     * @param string $escape
     * @return \SplTempFileObject
     */
    function create_temp_csv_file(array $data, $separator = ';', $enclosure = '"', $escape = '\\')
    {
        $file = new \SplTempFileObject();
        $file->setFlags(\SplFileObject::READ_CSV);
        $file->setCsvControl($separator, $enclosure, $escape);

        foreach ($data as $fields) {
            $file->fputcsv($fields);
        }

        $file->rewind();

        return $file;
    }
}

if (!function_exists('\Mirakl\date_format')) {
    /**
     * @param \DateTime $date
     * @return string
     */
    function date_format(\DateTime $date)
    {
        return $date->setTimezone(new \DateTimeZone('GMT'))
            ->format(\DateTime::ATOM);
    }
}

if (!function_exists('\Mirakl\default_user_agent')) {
    /**
     * Returns default User-Agent of Mirakl PHP SDK
     *
     * @param string $suffix
     * @return string
     */
    function default_user_agent($suffix = '')
    {
        $userAgent = 'Mirakl-PHP-SDK/' . get_version();

        if ($suffix) {
            $userAgent .= ' ' . ltrim($suffix, ' ');
        }

        return $userAgent;
    }
}

if (!function_exists('\Mirakl\get_version')) {
    /**
     * Returns current version of the Mirakl PHP SDK
     *
     * @return string
     */
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

if (!function_exists('\Mirakl\pascalize')) {
    /**
     * Converts undescore string to Pascal Case
     * For example: 'my_class' to 'MyClass'
     *
     * @param string $str
     * @return string
     */
    function pascalize($str)
    {
        return str_replace(' ', '', ucwords(strtr($str, '_-', '  ')));
    }
}

if (!function_exists('\Mirakl\underscorize')) {
    /**
     * Converts word into the underscore format
     * For example 'CustomValue' becomes 'custom_value'
     *
     * @param string $str
     * @return string
     */
    function underscorize($str)
    {
        return strtolower(trim(preg_replace('/([A-Z]|[0-9]+)/', "_$1", $str), '_'));
    }
}

if (!function_exists('\Mirakl\parse_file_response')) {
    /**
     * Converts specified response to a readable/downloadable file
     *
     * @param ResponseInterface $response
     * @param string            $extension
     * @return FileWrapper
     */
    function parse_file_response(ResponseInterface $response, $extension)
    {
        $body = $response->getBody();

        if ($body instanceof SplFileStream) {
            $file = $body->getFile();
        } else {
            $file = new \SplTempFileObject();
            $body->rewind();

            while (!$body->eof()) {
                $file->fwrite($body->read(1024));
            }
        }

        $fileWrapper = new FileWrapper($file);
        $fileWrapper->setFileExtension($extension);

        if ($extension == 'csv') {
            $file->setFlags(\SplFileObject::READ_CSV | \SplFileObject::SKIP_EMPTY);
            $file->setCsvControl(';', '"', "\x80");
        }

        if ($contentType = $response->getHeaderLine('Content-Type')) {
            $fileWrapper->setContentType($contentType);
        }

        if ($contentDisposition = $response->getHeaderLine('Content-Disposition')) {
            $filename = (new FilenameParser())->parse($contentDisposition);
            if ($filename) {
                $fileWrapper->setFileName($filename);
                $fileWrapper->setFileExtension(pathinfo($filename, PATHINFO_EXTENSION), false);
            }
        }

        return $fileWrapper;
    }
}

if (!function_exists('\Mirakl\parse_json_response')) {
    /**
     * Converts specified JSON response to array
     *
     * @param ResponseInterface $response
     * @param bool              $assoc
     * @return array|\stdClass
     * @throws \InvalidArgumentException
     */
    function parse_json_response(ResponseInterface $response, $assoc = true)
    {
        $json = trim((string) $response->getBody());

        if (empty($json)) {
            return []; // fallback for empty response
        }

        return \GuzzleHttp\json_decode($json, $assoc);
    }
}

if (!function_exists('\Mirakl\parse_xml_response')) {
    /**
     * Converts specified XML response to array
     *
     * @param ResponseInterface $response
     * @param bool              $assoc
     * @return array|\stdClass
     * @throws \InvalidArgumentException
     */
    function parse_xml_response(ResponseInterface $response, $assoc = true)
    {
        $xml = simplexml_load_string((string) $response->getBody(), 'SimpleXMLElement', LIBXML_NOCDATA);

        if ($xml === false) {
            throw new \InvalidArgumentException('XML can not be read');
        }

        $json = \GuzzleHttp\json_encode($xml);

        return \GuzzleHttp\json_decode($json, $assoc);
    }
}

if (!function_exists('\Mirakl\refs_to_query_param')) {
    /**
     * Formats references associative array to query parameter
     *
     * @param array  $data
     * @param string $entrySeparator
     * @param string $refSeperator
     * @return string
     */
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

if (!function_exists('\Mirakl\tuples_to_query_param')) {
    /**
     * Formats multiple array values to query parameter
     *
     * @param array  $data
     * @param string $entrySeparator
     * @param string $refSeperator
     * @return string
     */
    function tuples_to_query_param(array $data, $entrySeparator = '|', $refSeperator = ',')
    {
        $params = [];

        foreach ($data as $values) {
            $params[] = implode($entrySeparator, (array) $values);
        }

        return implode($refSeperator, $params);
    }
}

if (!function_exists('\Mirakl\remove_null_values')) {
    /**
     * Removes recursively the NULL values of the specified array
     *
     * @param array $data
     * @return array
     */
    function remove_null_values(array $data)
    {
        foreach ($data as $k => $v) {
            if (is_array($v)) {
                $data[$k] = remove_null_values($v);
            } elseif (null === $v) {
                unset($data[$k]);
            }
        }

        return $data;
    }
}
