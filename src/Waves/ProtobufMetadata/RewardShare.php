<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/reward_share.proto

namespace Waves\ProtobufMetadata;

class RewardShare
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xE5\x01\x0A\x18waves/reward_share.proto\x12\x05waves\".\x0A\x0BRewardShare\x12\x0F\x0A\x07address\x18\x01 \x01(\x0C\x12\x0E\x0A\x06reward\x18\x02 \x01(\x03B\x89\x01\x0A\x1Acom.wavesplatform.protobufZ9github.com/wavesplatform/gowaves/pkg/grpc/generated/waves\xAA\x02\x05Waves\xCA\x02\x0EWaves\\Protobuf\xE2\x02\x16Waves\\ProtobufMetadatab\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
