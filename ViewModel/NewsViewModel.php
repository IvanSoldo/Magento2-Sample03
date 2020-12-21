<?php

namespace Inchoo\Sample03\ViewModel;

use Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewsViewModel implements ArgumentInterface
{
    protected $newsCollectionFactory;
    protected $newsFactory;
    protected $newsResource;

    public function __construct(
        CollectionFactory $newsCollectionFactory,
        \Inchoo\Sample03\Model\ResourceModel\News $newsResource,
        \Inchoo\Sample03\Model\NewsFactory $newsFactory
    ) {
        $this->newsCollectionFactory = $newsCollectionFactory;
        $this->newsResource = $newsResource;
        $this->newsFactory = $newsFactory;
    }

    public function getNewsList()
    {
        $newsList = $this->newsCollectionFactory->create();
        $newsList->setOrder('news_id', 'DESC');
        $newsList->setPageSize(10);

        return $newsList;
    }

    public function getNewsById($id)
    {
        $news = $this->newsFactory->create();
        $this->newsResource->load($news, $id, 'news_id');

        if ($news->getId() === null) {
            return;
        }

        return $news;
    }

}
