<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A function that is defined inside the current module, made available to
 * outside modules / environments.
 *
 * Generated from protobuf message <code>Export</code>
 */
class Export extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Function func = 1;</code>
     */
    protected $func = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \App\Services\Extism\Proto\PBFunction $func
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Function func = 1;</code>
     * @return \App\Services\Extism\Proto\PBFunction|null
     */
    public function getFunc()
    {
        return $this->func;
    }

    public function hasFunc()
    {
        return isset($this->func);
    }

    public function clearFunc()
    {
        unset($this->func);
    }

    /**
     * Generated from protobuf field <code>.Function func = 1;</code>
     * @param \App\Services\Extism\Proto\PBFunction $var
     * @return $this
     */
    public function setFunc($var)
    {
        GPBUtil::checkMessage($var, \App\Services\Extism\Proto\PBFunction::class);
        $this->func = $var;

        return $this;
    }

}

