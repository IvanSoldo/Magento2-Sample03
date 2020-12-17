<?php

namespace Inchoo\Sample03\Controller\Test;

use Magento\Framework\App\Action\Context;

class Crud extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\Sample03\Model\ResourceModel\News
     */
    protected $newsResource;

    /**
     * @var \Inchoo\Sample03\Model\NewsFactory
     */
    protected $newsModelFactory;

    protected $commentsResource;

    protected $commentsModelFactory;

    /**
     * Controller constructor.
     * @param Context $context
     * @param \Inchoo\Sample03\Model\ResourceModel\News $newsResource
     * @param \Inchoo\Sample03\Model\NewsFactory $newsModelFactory
     * @param \Inchoo\Sample03\Model\ResourceModel\Comments $commentsResource,
     * @param \Inchoo\Sample03\Model\CommentsFactory $commentsModelFactory
     */
    public function __construct(
        Context $context,
        \Inchoo\Sample03\Model\ResourceModel\News $newsResource,
        \Inchoo\Sample03\Model\NewsFactory $newsModelFactory,
        \Inchoo\Sample03\Model\ResourceModel\Comments $commentsResource,
        \Inchoo\Sample03\Model\CommentsFactory $commentsModelFactory
    ) {
        parent::__construct($context);

        $this->newsResource = $newsResource;
        $this->newsModelFactory = $newsModelFactory;
        $this->commentsResource = $commentsResource;
        $this->commentsModelFactory = $commentsModelFactory;
    }

    /**
     * Controller action.
     */
    public function execute()
    {
        /**
         * New entry example
         */
        $news = $this->newsModelFactory->create();
        $news->setTitle('Some fake news title');
        $news->setContent('Šokantno!');
        $this->newsResource->save($news);

        $comment = $this->commentsModelFactory->create();
        $comment->setNewsId(1);
        $this->commentsResource->save($comment);

        //var_dump($news); //big dump, can crash browser without xdebug
        var_dump($news->debug());
        var_dump($comment->debug());

        /**
         * Load example
         */
        $news = $this->newsModelFactory->create();
        $this->newsResource->load($news, 1);

        if ($news->getId()) {
            //check if loaded
        }

        var_dump($news->debug());
    }
}
