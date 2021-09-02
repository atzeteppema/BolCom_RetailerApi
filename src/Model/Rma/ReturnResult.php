<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class ReturnResult
{
    private $returnId;
    private $registrationDateTime;
    private $fulfilmentMethod;
    private $returnItems;

    /**
     * @param \BolCom\RetailerApi\Model\Rma\ReturnId $returnId
     * @param \BolCom\RetailerApi\Model\DateTime $registrationDateTime
     * @param \BolCom\RetailerApi\Model\Offer\FulfilmentMethod $fulfilmentMethod
     * @param \BolCom\RetailerApi\Model\Rma\ReturnItem[]|null $returnItems
     */
    public function __construct(ReturnId $returnId, \BolCom\RetailerApi\Model\DateTime $registrationDateTime = null, \BolCom\RetailerApi\Model\Offer\FulfilmentMethod $fulfilmentMethod = null, array $returnItems)
    {
        $this->returnId = $returnId;
        $this->registrationDateTime = $registrationDateTime;
        $this->fulfilmentMethod = $fulfilmentMethod;
            $this->returnItems = [];
            foreach ($returnItems as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Rma\ReturnItem) {
                    throw new \InvalidArgumentException('returnItems expected an array of BolCom\RetailerApi\Model\Rma\ReturnItem');
                }
                $this->returnItems[] = $__value;
            }
    }

    public function returnId(): ReturnId
    {
        return $this->returnId;
    }

    public function registrationDateTime()
    {
        return $this->registrationDateTime;
    }

    public function fulfilmentMethod()
    {
        return $this->fulfilmentMethod;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Rma\ReturnItem[]
     */
    public function returnItems(): array
    {
        return $this->returnItems;
    }

    public function withReturnId(ReturnId $returnId): ReturnResult
    {
        return new self($returnId, $this->registrationDateTime, $this->fulfilmentMethod, $this->returnItems);
    }

    public function withRegistrationDateTime(\BolCom\RetailerApi\Model\DateTime $registrationDateTime = null): ReturnResult
    {
        return new self($this->returnId, $registrationDateTime, $this->fulfilmentMethod, $this->returnItems);
    }

    public function withFulfilmentMethod(\BolCom\RetailerApi\Model\Offer\FulfilmentMethod $fulfilmentMethod = null): ReturnResult
    {
        return new self($this->returnId, $this->registrationDateTime, $fulfilmentMethod, $this->returnItems);
    }

    /**
     * @param \BolCom\RetailerApi\Model\Rma\ReturnItem[]|null $returnItems
     * @return \BolCom\RetailerApi\Model\Rma\ReturnResult
     */
    public function withReturnItems(array $returnItems): ReturnResult
    {
        return new self($this->returnId, $this->registrationDateTime, $this->fulfilmentMethod, $returnItems);
    }

    public static function fromArray(array $data): ReturnResult
    {
        if (! isset($data['returnId']) || ! \is_int($data['returnId'])) {
            throw new \InvalidArgumentException("Key 'returnId' is missing in data array or is not a int");
        }

        $returnId = ReturnId::fromScalar($data['returnId']);

        if (isset($data['registrationDateTime'])) {
            if (! \is_string($data['registrationDateTime'])) {
                throw new \InvalidArgumentException("Value for 'registrationDateTime' is not a string in data array");
            }

            $registrationDateTime = \BolCom\RetailerApi\Model\DateTime::fromString($data['registrationDateTime']);
        } else {
            $registrationDateTime = null;
        }

        if (isset($data['fulfilmentMethod'])) {
            if (! \is_string($data['fulfilmentMethod'])) {
                throw new \InvalidArgumentException("Value for 'fulfilmentMethod' is not a string in data array");
            }

            $fulfilmentMethod = \BolCom\RetailerApi\Model\Offer\FulfilmentMethod::fromValue($data['fulfilmentMethod']);
        } else {
            $fulfilmentMethod = null;
        }

        if (! isset($data['returnItems']) || ! \is_array($data['returnItems'])) {
            throw new \InvalidArgumentException("Key 'returnItems' is missing in data array or is not an array");
        }

        $returnItems = [];

        foreach ($data['returnItems'] as $__value) {
            if (! \is_array($data['returnItems'])) {
                throw new \InvalidArgumentException("Key 'returnItems' in data array or is not an array of arrays");
            }

            $returnItems[] = ReturnItem::fromArray($__value);
        }

        return new self(
            $returnId,
            $registrationDateTime,
            $fulfilmentMethod,
            $returnItems
        );
    }
}
