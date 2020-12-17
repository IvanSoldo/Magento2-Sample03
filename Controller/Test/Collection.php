<?php

namespace Inchoo\Sample03\Controller\Test;

use Magento\Framework\App\Action\Context;

class Collection  extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\Sample03\Model\ResourceModel\News\Collection
     */
    protected $newsCollectionFactory;

    protected $commentsCollectionFactory;

    /**
     * Controller constructor.
     * @param Context $context
     * @param \Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory $newsCollectionFactory
     * @param \Inchoo\Sample03\Model\ResourceModel\Comments\CollectionFactory $commentsCollectionFactory
     */
    public function __construct(
        Context $context,
        \Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory $newsCollectionFactory,
        \Inchoo\Sample03\Model\ResourceModel\Comments\CollectionFactory $commentsCollectionFactory
    ) {
        parent::__construct($context);

        $this->newsCollectionFactory = $newsCollectionFactory;
        $this->commentsCollectionFactory = $commentsCollectionFactory;
    }

    /**
     * Controller action.
     */
    public function execute()
    {

        $newsCollection = $this->newsCollectionFactory->create();
        $commentCollection = $this->commentsCollectionFactory->create();

        //$newsCollection->addFieldToFilter('id', ['gt' => 5]]);

        foreach($commentCollection as $news) {
            var_dump(get_class($news));
            var_dump($news->debug());
        }

    }

}
