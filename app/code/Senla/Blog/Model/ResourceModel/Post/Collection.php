<?php

namespace Senla\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Senla\Blog\Model\Post;
use Senla\Blog\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
