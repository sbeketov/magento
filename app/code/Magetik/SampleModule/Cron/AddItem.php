<?php

namespace Magetik\SampleModule\Cron;

use Magetik\SampleModule\Model\ItemFactory;

class AddItem
{
    /** @var ItemFactory $itemFactory */
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setName('Scheduled item')
            ->setDescription('Created at ' . time())
            ->save();
    }
}
