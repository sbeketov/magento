<?php

namespace Magetik\SampleModule\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Magetik\SampleModule\Api\Data\ItemInterface[]
     */
    public function getList(): array;
}
