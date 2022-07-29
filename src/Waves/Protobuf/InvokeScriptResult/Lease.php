<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: waves/invoke_script_result.proto

namespace Waves\Protobuf\InvokeScriptResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.InvokeScriptResult.Lease</code>
 */
class Lease extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.waves.Recipient recipient = 1;</code>
     */
    protected $recipient = null;
    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>int64 nonce = 3;</code>
     */
    protected $nonce = 0;
    /**
     * Generated from protobuf field <code>bytes lease_id = 4;</code>
     */
    protected $lease_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Waves\Protobuf\Recipient $recipient
     *     @type int|string $amount
     *     @type int|string $nonce
     *     @type string $lease_id
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\InvokeScriptResult::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.waves.Recipient recipient = 1;</code>
     * @return \Waves\Protobuf\Recipient|null
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    public function hasRecipient()
    {
        return isset($this->recipient);
    }

    public function clearRecipient()
    {
        unset($this->recipient);
    }

    /**
     * Generated from protobuf field <code>.waves.Recipient recipient = 1;</code>
     * @param \Waves\Protobuf\Recipient $var
     * @return $this
     */
    public function setRecipient($var)
    {
        GPBUtil::checkMessage($var, \Waves\Protobuf\Recipient::class);
        $this->recipient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 nonce = 3;</code>
     * @return int|string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>int64 nonce = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkInt64($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes lease_id = 4;</code>
     * @return string
     */
    public function getLeaseId()
    {
        return $this->lease_id;
    }

    /**
     * Generated from protobuf field <code>bytes lease_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLeaseId($var)
    {
        GPBUtil::checkString($var, False);
        $this->lease_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Lease::class, \Waves\Protobuf\InvokeScriptResult_Lease::class);

