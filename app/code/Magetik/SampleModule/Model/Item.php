<?php

namespace Magetik\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Magetik\SampleModule\Model\ResourceModel\Item::class);
    }
}
