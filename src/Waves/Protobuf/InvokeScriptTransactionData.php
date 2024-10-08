<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction.proto

namespace Waves\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.InvokeScriptTransactionData</code>
 */
class InvokeScriptTransactionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.waves.Recipient d_app = 1;</code>
     */
    protected $d_app = null;
    /**
     * Generated from protobuf field <code>bytes function_call = 2;</code>
     */
    protected $function_call = '';
    /**
     * Generated from protobuf field <code>repeated .waves.Amount payments = 3;</code>
     */
    private $payments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Waves\Protobuf\Recipient $d_app
     *     @type string $function_call
     *     @type array<\Waves\Protobuf\Amount>|\Google\Protobuf\Internal\RepeatedField $payments
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.waves.Recipient d_app = 1;</code>
     * @return \Waves\Protobuf\Recipient|null
     */
    public function getDApp()
    {
        return $this->d_app;
    }

    public function hasDApp()
    {
        return isset($this->d_app);
    }

    public function clearDApp()
    {
        unset($this->d_app);
    }

    /**
     * Generated from protobuf field <code>.waves.Recipient d_app = 1;</code>
     * @param \Waves\Protobuf\Recipient $var
     * @return $this
     */
    public function setDApp($var)
    {
        GPBUtil::checkMessage($var, \Waves\Protobuf\Recipient::class);
        $this->d_app = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes function_call = 2;</code>
     * @return string
     */
    public function getFunctionCall()
    {
        return $this->function_call;
    }

    /**
     * Generated from protobuf field <code>bytes function_call = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionCall($var)
    {
        GPBUtil::checkString($var, False);
        $this->function_call = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.Amount payments = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.Amount payments = 3;</code>
     * @param array<\Waves\Protobuf\Amount>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\Amount::class);
        $this->payments = $arr;

        return $this;
    }

}

