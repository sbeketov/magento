<?php

namespace Magetik\SampleModule\Controller\Index;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

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
    public function execute(): ResultInterface
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
