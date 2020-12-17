<?php

namespace Inchoo\Sample03\Block;

use Magento\Framework\View\Element\Template\Context;
use Inchoo\Sample03\Model\News;

class ListNews extends \Magento\Framework\View\Element\Template
{

    protected $news;

    public function __construct(Context $context, News $news)
    {
        $this->news = $news;
        parent::__construct($context);
    }

    public function getNews()
    {
        $news = $this->news->getCollection();
        $news->setOrder('news_id', 'DESC');
        $news->setPageSize(10);

        return $news;
    }


}
