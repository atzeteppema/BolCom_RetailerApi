<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order\Command;

final class OrderItem
{
    private $orderItemId;
    private $reasonCode;

    public function __construct(\BolCom\RetailerApi\Model\Order\OrderItemId $orderItemId, \BolCom\RetailerApi\Model\Order\CancellationReason $reasonCode)
    {
        $this->orderItemId = $orderItemId;
        $this->reasonCode = $reasonCode;
    }

    public function orderItemId(): \BolCom\RetailerApi\Model\Order\OrderItemId
    {
        return $this->orderItemId;
    }

    public function reasonCode(): \BolCom\RetailerApi\Model\Order\CancellationReason
    {
        return $this->reasonCode;
    }

    public function withOrderItemId(\BolCom\RetailerApi\Model\Order\OrderItemId $orderItemId): OrderItem
    {
        return new self($orderItemId, $this->reasonCode);
    }

    public function withReasonCode(\BolCom\RetailerApi\Model\Order\CancellationReason $reasonCode): OrderItem
    {
        return new self($this->orderItemId, $reasonCode);
    }

    public static function fromArray(array $data): OrderItem
    {
        if (! isset($data['orderItemId']) || ! \is_string($data['orderItemId'])) {
            throw new \InvalidArgumentException("Key 'orderItemId' is missing in data array or is not a string");
        }

        $orderItemId = \BolCom\RetailerApi\Model\Order\OrderItemId::fromString($data['orderItemId']);

        if (! isset($data['reasonCode']) || ! \is_string($data['reasonCode'])) {
            throw new \InvalidArgumentException("Key 'reasonCode' is missing in data array or is not a string");
        }

        $reasonCode = \BolCom\RetailerApi\Model\Order\CancellationReason::fromValue($data['reasonCode']);

        return new self($orderItemId, $reasonCode);
    }
}