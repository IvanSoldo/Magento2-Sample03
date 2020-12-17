<?php

namespace Inchoo\Sample03\Block;

use Magento\Framework\View\Element\Template\Context;
use Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory;

class ListNews extends \Magento\Framework\View\Element\Template
{

    protected $newsFactory;

    public function __construct(Context $context, CollectionFactory $newsFactory)
    {
        $this->newsFactory = $newsFactory;
        parent::__construct($context);
    }

    public function getNews()
    {
        $news = $this->newsFactory->create();
        $news->setOrder('news_id', 'DESC');
        $news->setPageSize(10);

        return $news;
    }


}
