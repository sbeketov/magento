<?php

namespace Magetik\SampleModule\Model;

use Magetik\SampleModule\Api\ItemRepositoryInterface;
use Magetik\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    private CollectionFactory $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return \Magetik\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList(): array
    {
        return $this->collectionFactory->create()->getItems();
    }
}
