<?php

namespace Senla\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('senla_blog_posts', 'id');
    }
}
