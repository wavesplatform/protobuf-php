<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction.proto

namespace Waves\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.InvokeExpressionTransactionData</code>
 */
class InvokeExpressionTransactionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes expression = 1;</code>
     */
    protected $expression = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $expression
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes expression = 1;</code>
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Generated from protobuf field <code>bytes expression = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExpression($var)
    {
        GPBUtil::checkString($var, False);
        $this->expression = $var;

        return $this;
    }

}

