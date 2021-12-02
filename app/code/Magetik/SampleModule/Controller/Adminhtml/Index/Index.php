<?php

namespace Magetik\SampleModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * @inheritdoc
     */
    public function execute(): Raw
    {
        /** @var Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Admins');
        return $result;
    }
}
