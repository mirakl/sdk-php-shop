<?php
namespace Mirakl\Core\Request;

use Mirakl\Core\Client\ApiClientInterface;

interface RequestInterface
{
    /**
     * Get request options parameters
     *
     * @return  array
     */
    public function getOptions();

    /**
     * Get request body parameters
     *
     * @return  array
     */
    public function getBodyParams();

    /**
     * HTTP method (GET, POST, PUT, PATCH, DELETE)
     *
     * @return  string
     */
    public function getMethod();

    /**
     * Get request query parameters
     *
     * @return  array
     */
    public function getQueryParams();

    /**
     * Get request URI
     *
     * @return  string
     */
    public function getUri();

    /**
     * Returns whether the request body is JSON or not
     *
     * @return  bool
     */
    public function isJSON();

    /**
     * Returns true if query parameters can be duplicated if multiple values are specified, false otherwise.
     * For example if true:
     * order_id=ORD-123&order_id=ORD-456
     * instead of:
     * order_id[]=ORD-123&order_id[]=ORD-456
     *
     * @return  bool
     */
    public function areQueryParamsDuplicated();

    /**
     * Executes request against provided API client
     *
     * @param   ApiClientInterface  $api
     * @return  mixed
     */
    public function run(ApiClientInterface $api);
}