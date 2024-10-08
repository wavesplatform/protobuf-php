<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction_state_snapshot.proto

namespace Waves\Protobuf\TransactionStateSnapshot;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.TransactionStateSnapshot.NewLease</code>
 */
class NewLease extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes lease_id = 1;</code>
     */
    protected $lease_id = '';
    /**
     * Generated from protobuf field <code>bytes sender_public_key = 2;</code>
     */
    protected $sender_public_key = '';
    /**
     * Generated from protobuf field <code>bytes recipient_address = 3;</code>
     */
    protected $recipient_address = '';
    /**
     * Generated from protobuf field <code>int64 amount = 4;</code>
     */
    protected $amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $lease_id
     *     @type string $sender_public_key
     *     @type string $recipient_address
     *     @type int|string $amount
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\TransactionStateSnapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes lease_id = 1;</code>
     * @return string
     */
    public function getLeaseId()
    {
        return $this->lease_id;
    }

    /**
     * Generated from protobuf field <code>bytes lease_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLeaseId($var)
    {
        GPBUtil::checkString($var, False);
        $this->lease_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes sender_public_key = 2;</code>
     * @return string
     */
    public function getSenderPublicKey()
    {
        return $this->sender_public_key;
    }

    /**
     * Generated from protobuf field <code>bytes sender_public_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSenderPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->sender_public_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes recipient_address = 3;</code>
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->recipient_address;
    }

    /**
     * Generated from protobuf field <code>bytes recipient_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRecipientAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->recipient_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 4;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

}

