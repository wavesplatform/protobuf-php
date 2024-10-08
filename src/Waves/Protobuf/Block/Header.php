<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/block.proto

namespace Waves\Protobuf\Block;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.Block.Header</code>
 */
class Header extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 chain_id = 1;</code>
     */
    protected $chain_id = 0;
    /**
     * Generated from protobuf field <code>bytes reference = 2;</code>
     */
    protected $reference = '';
    /**
     * Generated from protobuf field <code>int64 base_target = 3;</code>
     */
    protected $base_target = 0;
    /**
     * Generated from protobuf field <code>bytes generation_signature = 4;</code>
     */
    protected $generation_signature = '';
    /**
     * Generated from protobuf field <code>repeated uint32 feature_votes = 5;</code>
     */
    private $feature_votes;
    /**
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>int32 version = 7;</code>
     */
    protected $version = 0;
    /**
     * Generated from protobuf field <code>bytes generator = 8;</code>
     */
    protected $generator = '';
    /**
     * Generated from protobuf field <code>int64 reward_vote = 9;</code>
     */
    protected $reward_vote = 0;
    /**
     * Generated from protobuf field <code>bytes transactions_root = 10;</code>
     */
    protected $transactions_root = '';
    /**
     * Generated from protobuf field <code>bytes state_hash = 11;</code>
     */
    protected $state_hash = '';
    /**
     * Generated from protobuf field <code>.waves.Block.Header.ChallengedHeader challenged_header = 12;</code>
     */
    protected $challenged_header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $chain_id
     *     @type string $reference
     *     @type int|string $base_target
     *     @type string $generation_signature
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $feature_votes
     *     @type int|string $timestamp
     *     @type int $version
     *     @type string $generator
     *     @type int|string $reward_vote
     *     @type string $transactions_root
     *     @type string $state_hash
     *     @type \Waves\Protobuf\Block\Header\ChallengedHeader $challenged_header
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\Block::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 chain_id = 1;</code>
     * @return int
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * Generated from protobuf field <code>int32 chain_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkInt32($var);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes reference = 2;</code>
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Generated from protobuf field <code>bytes reference = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReference($var)
    {
        GPBUtil::checkString($var, False);
        $this->reference = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 base_target = 3;</code>
     * @return int|string
     */
    public function getBaseTarget()
    {
        return $this->base_target;
    }

    /**
     * Generated from protobuf field <code>int64 base_target = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBaseTarget($var)
    {
        GPBUtil::checkInt64($var);
        $this->base_target = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes generation_signature = 4;</code>
     * @return string
     */
    public function getGenerationSignature()
    {
        return $this->generation_signature;
    }

    /**
     * Generated from protobuf field <code>bytes generation_signature = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGenerationSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->generation_signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 feature_votes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatureVotes()
    {
        return $this->feature_votes;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 feature_votes = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatureVotes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->feature_votes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 version = 7;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int32 version = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes generator = 8;</code>
     * @return string
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * Generated from protobuf field <code>bytes generator = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setGenerator($var)
    {
        GPBUtil::checkString($var, False);
        $this->generator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 reward_vote = 9;</code>
     * @return int|string
     */
    public function getRewardVote()
    {
        return $this->reward_vote;
    }

    /**
     * Generated from protobuf field <code>int64 reward_vote = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardVote($var)
    {
        GPBUtil::checkInt64($var);
        $this->reward_vote = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes transactions_root = 10;</code>
     * @return string
     */
    public function getTransactionsRoot()
    {
        return $this->transactions_root;
    }

    /**
     * Generated from protobuf field <code>bytes transactions_root = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionsRoot($var)
    {
        GPBUtil::checkString($var, False);
        $this->transactions_root = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes state_hash = 11;</code>
     * @return string
     */
    public function getStateHash()
    {
        return $this->state_hash;
    }

    /**
     * Generated from protobuf field <code>bytes state_hash = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setStateHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->state_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.waves.Block.Header.ChallengedHeader challenged_header = 12;</code>
     * @return \Waves\Protobuf\Block\Header\ChallengedHeader|null
     */
    public function getChallengedHeader()
    {
        return $this->challenged_header;
    }

    public function hasChallengedHeader()
    {
        return isset($this->challenged_header);
    }

    public function clearChallengedHeader()
    {
        unset($this->challenged_header);
    }

    /**
     * Generated from protobuf field <code>.waves.Block.Header.ChallengedHeader challenged_header = 12;</code>
     * @param \Waves\Protobuf\Block\Header\ChallengedHeader $var
     * @return $this
     */
    public function setChallengedHeader($var)
    {
        GPBUtil::checkMessage($var, \Waves\Protobuf\Block\Header\ChallengedHeader::class);
        $this->challenged_header = $var;

        return $this;
    }

}

