<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/invoke_script_result.proto

namespace Waves\Protobuf\InvokeScriptResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.InvokeScriptResult.Call</code>
 */
class Call extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string function = 1;</code>
     */
    protected $function = '';
    /**
     * Generated from protobuf field <code>repeated bytes args_bytes = 2 [deprecated = true];</code>
     * @deprecated
     */
    private $args_bytes;
    /**
     * Generated from protobuf field <code>repeated .waves.InvokeScriptResult.Call.Argument args = 3;</code>
     */
    private $args;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $function
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args_bytes
     *     @type array<\Waves\Protobuf\InvokeScriptResult\Call\Argument>|\Google\Protobuf\Internal\RepeatedField $args
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\InvokeScriptResult::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string function = 1;</code>
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Generated from protobuf field <code>string function = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->function = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes args_bytes = 2 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getArgsBytes()
    {
        @trigger_error('args_bytes is deprecated.', E_USER_DEPRECATED);
        return $this->args_bytes;
    }

    /**
     * Generated from protobuf field <code>repeated bytes args_bytes = 2 [deprecated = true];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setArgsBytes($var)
    {
        @trigger_error('args_bytes is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->args_bytes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.InvokeScriptResult.Call.Argument args = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.InvokeScriptResult.Call.Argument args = 3;</code>
     * @param array<\Waves\Protobuf\InvokeScriptResult\Call\Argument>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\InvokeScriptResult\Call\Argument::class);
        $this->args = $arr;

        return $this;
    }

}

