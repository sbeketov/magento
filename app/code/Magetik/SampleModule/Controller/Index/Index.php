<?php

namespace Magetik\SampleModule\Controller\Index;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @param ResultFactory $forwardFactory
     */
    public function __construct(
        ResultFactory $forwardFactory
    ) {
        $this->resultFactory = $forwardFactory;
    }

    /**
     * @inheritdoc
     */
    public function execute(): Raw
    {
        /** @var Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello world');
        return $result;
    }
}
