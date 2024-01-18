<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The message returned in response to a `DeleteModulesRequest`.
 *
 * Generated from protobuf message <code>DeleteModulesResponse</code>
 */
class DeleteModulesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<int64, string> module_id_hash = 1;</code>
     */
    private $module_id_hash;
    /**
     * Generated from protobuf field <code>optional .Error error = 2;</code>
     */
    protected $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $module_id_hash
     *     @type \App\Services\Extism\Proto\Error $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<int64, string> module_id_hash = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getModuleIdHash()
    {
        return $this->module_id_hash;
    }

    /**
     * Generated from protobuf field <code>map<int64, string> module_id_hash = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setModuleIdHash($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::STRING);
        $this->module_id_hash = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Error error = 2;</code>
     * @return \App\Services\Extism\Proto\Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Generated from protobuf field <code>optional .Error error = 2;</code>
     * @param \App\Services\Extism\Proto\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \App\Services\Extism\Proto\Error::class);
        $this->error = $var;

        return $this;
    }

}

