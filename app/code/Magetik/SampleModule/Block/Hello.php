<?php

namespace Magetik\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Magetik\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Magetik\SampleModule\Model\Item[]
     */
    public function getItems(): array
    {
        return $this->collectionFactory->create()->getItems();
    }

}
