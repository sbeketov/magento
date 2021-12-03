<?php

namespace Magetik\SampleModule\Cron;

use Magetik\SampleModule\Model\ItemFactory;
use Magetik\SampleModule\Model\Config;

class AddItem
{
    private ItemFactory $itemFactory;


    private Config $config;

    public function __construct(ItemFactory $itemFactory, Config $config)
    {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    public function execute()
    {
        if ($this->config->isEnabled()) {
            $this->itemFactory->create()
                ->setName('Scheduled item')
                ->setDescription('Created at ' . time())
                ->save();
        }
    }
}
