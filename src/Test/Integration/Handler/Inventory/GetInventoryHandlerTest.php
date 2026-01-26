<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Test\Integration\Handler\Inventory;

use BolCom\RetailerApi\Client\ClientConfig;
use BolCom\RetailerApi\Infrastructure\ClientPool;
use BolCom\RetailerApi\Model\Inventory\InventoryOffer;
use BolCom\RetailerApi\Model\Inventory\InventoryOfferList;
use BolCom\RetailerApi\Model\Inventory\Query\GetInventory;

class GetInventoryHandlerTest extends \PHPUnit\Framework\TestCase
{
    /** @var \BolCom\RetailerApi\Infrastructure\MessageBus $messageBus */
    private $messageBus;

    protected function setUp(): void
    {
        $clientPool = ClientPool::configure(new ClientConfig(BOL_CLIENT_ID, BOL_CLIENT_SECRET, true));
        $this->messageBus = new \BolCom\RetailerApi\Infrastructure\MessageBus($clientPool);
    }

    public function test__invoke()
    {
        $inventoryOfferList = $this->messageBus->dispatch(GetInventory::with());

        $this->assertInstanceOf(InventoryOfferList::class, $inventoryOfferList);

        foreach ($inventoryOfferList->inventory() as $inventoryOffer) {
            $this->assertInstanceOf(InventoryOffer::class, $inventoryOffer);
        }
    }
}
