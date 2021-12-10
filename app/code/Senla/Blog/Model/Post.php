<?php

namespace Senla\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Senla\Blog\Model\ResourceModel\Post as ResourceModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
