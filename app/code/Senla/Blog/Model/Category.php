<?php

namespace Senla\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Senla\Blog\Model\ResourceModel\Category as ResourceModel;

class Category extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
