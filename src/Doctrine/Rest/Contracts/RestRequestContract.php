<?php namespace Pz\Doctrine\Rest\Contracts;

use Symfony\Component\HttpFoundation\Request;

interface RestRequestContract
{
    /**
     * Json API type.
     */
    const JSON_API_CONTENT_TYPE = 'application/vnd.api+json';

    /**
     * Default limit for list.
     */
    const DEFAULT_LIMIT = 1000;

    /**
     * @return Request
     */
    public function http();

    /**
     * Authorize rest request.
     * Entity will be object for get,update,delete actions.
     * Entity will be string for index,create action.
     *
     * @param object|string $entity
     *
     * @return mixed
     */
    public function authorize($entity);

    /**
     * @return bool
     */
    public function isAcceptJsonApi();

    /**
     * @return bool
     */
    public function isContentJsonApi();

    /**
     * @return int|array
     */
    public function getId();

    /**
     * Get jsonapi fieldsets.
     *
     * @return array
     */
    public function getFields();

    /**
     * @return mixed|null
     */
    public function getFilter();

    /**
     * @return array|null
     */
    public function getOrderBy();

    /**
     * @return int|null
     */
    public function getStart();

    /**
     * @return int|null
     */
    public function getLimit();

    /**
     * @return array|string|null
     */
    public function getInclude();

    /**
     * @return array|string|null
     */
    public function getExclude();
}