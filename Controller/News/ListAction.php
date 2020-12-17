<?php

namespace Inchoo\Sample03\Controller\News;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class ListAction
 * @package Inchoo\Sample03\Controller\Index
 *
 * List is reserved keyword in PHP, so we're using Action suffix in controller name !!
 */
class ListAction extends \Magento\Framework\App\Action\Action
{

    private $resultPageFactory;

    /**
     * ListAction constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}

