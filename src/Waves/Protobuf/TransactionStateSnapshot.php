<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: waves/transaction_state_snapshot.proto

namespace Waves\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>waves.TransactionStateSnapshot</code>
 */
class TransactionStateSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.Balance balances = 1;</code>
     */
    private $balances;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.LeaseBalance lease_balances = 2;</code>
     */
    private $lease_balances;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.NewLease new_leases = 3;</code>
     */
    private $new_leases;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.CancelledLease cancelled_leases = 4;</code>
     */
    private $cancelled_leases;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.NewAsset asset_statics = 5;</code>
     */
    private $asset_statics;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AssetVolume asset_volumes = 6;</code>
     */
    private $asset_volumes;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AssetNameAndDescription asset_names_and_descriptions = 7;</code>
     */
    private $asset_names_and_descriptions;
    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.AssetScript asset_scripts = 8;</code>
     */
    protected $asset_scripts = null;
    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.Alias aliases = 9;</code>
     */
    protected $aliases = null;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.OrderFill order_fills = 10;</code>
     */
    private $order_fills;
    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.AccountScript account_scripts = 11;</code>
     */
    protected $account_scripts = null;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AccountData account_data = 12;</code>
     */
    private $account_data;
    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.Sponsorship sponsorships = 13;</code>
     */
    private $sponsorships;
    /**
     * Generated from protobuf field <code>.waves.TransactionStatus transaction_status = 14;</code>
     */
    protected $transaction_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\Balance>|\Google\Protobuf\Internal\RepeatedField $balances
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\LeaseBalance>|\Google\Protobuf\Internal\RepeatedField $lease_balances
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\NewLease>|\Google\Protobuf\Internal\RepeatedField $new_leases
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\CancelledLease>|\Google\Protobuf\Internal\RepeatedField $cancelled_leases
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\NewAsset>|\Google\Protobuf\Internal\RepeatedField $asset_statics
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\AssetVolume>|\Google\Protobuf\Internal\RepeatedField $asset_volumes
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\AssetNameAndDescription>|\Google\Protobuf\Internal\RepeatedField $asset_names_and_descriptions
     *     @type \Waves\Protobuf\TransactionStateSnapshot\AssetScript $asset_scripts
     *     @type \Waves\Protobuf\TransactionStateSnapshot\Alias $aliases
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\OrderFill>|\Google\Protobuf\Internal\RepeatedField $order_fills
     *     @type \Waves\Protobuf\TransactionStateSnapshot\AccountScript $account_scripts
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\AccountData>|\Google\Protobuf\Internal\RepeatedField $account_data
     *     @type array<\Waves\Protobuf\TransactionStateSnapshot\Sponsorship>|\Google\Protobuf\Internal\RepeatedField $sponsorships
     *     @type int $transaction_status
     * }
     */
    public function __construct($data = NULL) {
        \Waves\ProtobufMetadata\TransactionStateSnapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.Balance balances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBalances()
    {
        return $this->balances;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.Balance balances = 1;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\Balance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBalances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\Balance::class);
        $this->balances = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.LeaseBalance lease_balances = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeaseBalances()
    {
        return $this->lease_balances;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.LeaseBalance lease_balances = 2;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\LeaseBalance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeaseBalances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\LeaseBalance::class);
        $this->lease_balances = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.NewLease new_leases = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNewLeases()
    {
        return $this->new_leases;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.NewLease new_leases = 3;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\NewLease>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNewLeases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\NewLease::class);
        $this->new_leases = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.CancelledLease cancelled_leases = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCancelledLeases()
    {
        return $this->cancelled_leases;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.CancelledLease cancelled_leases = 4;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\CancelledLease>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCancelledLeases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\CancelledLease::class);
        $this->cancelled_leases = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.NewAsset asset_statics = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetStatics()
    {
        return $this->asset_statics;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.NewAsset asset_statics = 5;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\NewAsset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetStatics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\NewAsset::class);
        $this->asset_statics = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AssetVolume asset_volumes = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetVolumes()
    {
        return $this->asset_volumes;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AssetVolume asset_volumes = 6;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\AssetVolume>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\AssetVolume::class);
        $this->asset_volumes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AssetNameAndDescription asset_names_and_descriptions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetNamesAndDescriptions()
    {
        return $this->asset_names_and_descriptions;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AssetNameAndDescription asset_names_and_descriptions = 7;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\AssetNameAndDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetNamesAndDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\AssetNameAndDescription::class);
        $this->asset_names_and_descriptions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.AssetScript asset_scripts = 8;</code>
     * @return \Waves\Protobuf\TransactionStateSnapshot\AssetScript|null
     */
    public function getAssetScripts()
    {
        return $this->asset_scripts;
    }

    public function hasAssetScripts()
    {
        return isset($this->asset_scripts);
    }

    public function clearAssetScripts()
    {
        unset($this->asset_scripts);
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.AssetScript asset_scripts = 8;</code>
     * @param \Waves\Protobuf\TransactionStateSnapshot\AssetScript $var
     * @return $this
     */
    public function setAssetScripts($var)
    {
        GPBUtil::checkMessage($var, \Waves\Protobuf\TransactionStateSnapshot\AssetScript::class);
        $this->asset_scripts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.Alias aliases = 9;</code>
     * @return \Waves\Protobuf\TransactionStateSnapshot\Alias|null
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    public function hasAliases()
    {
        return isset($this->aliases);
    }

    public function clearAliases()
    {
        unset($this->aliases);
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.Alias aliases = 9;</code>
     * @param \Waves\Protobuf\TransactionStateSnapshot\Alias $var
     * @return $this
     */
    public function setAliases($var)
    {
        GPBUtil::checkMessage($var, \Waves\Protobuf\TransactionStateSnapshot\Alias::class);
        $this->aliases = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.OrderFill order_fills = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderFills()
    {
        return $this->order_fills;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.OrderFill order_fills = 10;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\OrderFill>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderFills($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\OrderFill::class);
        $this->order_fills = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.AccountScript account_scripts = 11;</code>
     * @return \Waves\Protobuf\TransactionStateSnapshot\AccountScript|null
     */
    public function getAccountScripts()
    {
        return $this->account_scripts;
    }

    public function hasAccountScripts()
    {
        return isset($this->account_scripts);
    }

    public function clearAccountScripts()
    {
        unset($this->account_scripts);
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStateSnapshot.AccountScript account_scripts = 11;</code>
     * @param \Waves\Protobuf\TransactionStateSnapshot\AccountScript $var
     * @return $this
     */
    public function setAccountScripts($var)
    {
        GPBUtil::checkMessage($var, \Waves\Protobuf\TransactionStateSnapshot\AccountScript::class);
        $this->account_scripts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AccountData account_data = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccountData()
    {
        return $this->account_data;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.AccountData account_data = 12;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\AccountData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccountData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\AccountData::class);
        $this->account_data = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.Sponsorship sponsorships = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSponsorships()
    {
        return $this->sponsorships;
    }

    /**
     * Generated from protobuf field <code>repeated .waves.TransactionStateSnapshot.Sponsorship sponsorships = 13;</code>
     * @param array<\Waves\Protobuf\TransactionStateSnapshot\Sponsorship>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSponsorships($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Waves\Protobuf\TransactionStateSnapshot\Sponsorship::class);
        $this->sponsorships = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStatus transaction_status = 14;</code>
     * @return int
     */
    public function getTransactionStatus()
    {
        return $this->transaction_status;
    }

    /**
     * Generated from protobuf field <code>.waves.TransactionStatus transaction_status = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setTransactionStatus($var)
    {
        GPBUtil::checkEnum($var, \Waves\Protobuf\TransactionStatus::class);
        $this->transaction_status = $var;

        return $this;
    }

}

