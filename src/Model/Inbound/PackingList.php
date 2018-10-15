<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class PackingList
{
    private $packingList;

    public function __construct($packingList)
    {
        $this->packingList = $packingList;
    }

    public function packingList()
    {
        return $this->packingList;
    }

    public function withPackingList($packingList): PackingList
    {
        return new self($packingList);
    }

    public static function fromArray(array $data): PackingList
    {
        if (! isset($data['packingList'])) {
            throw new \InvalidArgumentException("Key 'packingList' is missing in data array");
        }

        $packingList = $data['packingList'];

        return new self($packingList);
    }
}