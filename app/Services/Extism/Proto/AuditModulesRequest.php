<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `POST /api/v1/audit:`
 * Return a list of modules which match the outcome requirements using the provided checkfile.
 *
 * Generated from protobuf message <code>AuditModulesRequest</code>
 */
class AuditModulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * the YAML checkfile (e.g. mod.yaml) bytes
     *
     * Generated from protobuf field <code>bytes checkfile = 1;</code>
     */
    protected $checkfile = '';
    /**
     * Generated from protobuf field <code>.AuditOutcome outcome = 2;</code>
     */
    protected $outcome = 0;
    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $checkfile
     *           the YAML checkfile (e.g. mod.yaml) bytes
     *     @type int $outcome
     *     @type \App\Services\Extism\Proto\Pagination $pagination
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * the YAML checkfile (e.g. mod.yaml) bytes
     *
     * Generated from protobuf field <code>bytes checkfile = 1;</code>
     * @return string
     */
    public function getCheckfile()
    {
        return $this->checkfile;
    }

    /**
     * the YAML checkfile (e.g. mod.yaml) bytes
     *
     * Generated from protobuf field <code>bytes checkfile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckfile($var)
    {
        GPBUtil::checkString($var, False);
        $this->checkfile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AuditOutcome outcome = 2;</code>
     * @return int
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Generated from protobuf field <code>.AuditOutcome outcome = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkEnum($var, \App\Services\Extism\Proto\AuditOutcome::class);
        $this->outcome = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     * @return \App\Services\Extism\Proto\Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 3;</code>
     * @param \App\Services\Extism\Proto\Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \App\Services\Extism\Proto\Pagination::class);
        $this->pagination = $var;

        return $this;
    }

}

