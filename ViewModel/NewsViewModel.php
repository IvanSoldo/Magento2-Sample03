<?php

namespace Inchoo\Sample03\ViewModel;

use Inchoo\Sample03\Api\NewsRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewsViewModel implements ArgumentInterface
{
    /**
     * @var \Inchoo\Sample03\Api\NewsRepositoryInterface
     */
    protected $newsRepository;

    /**
     * @param NewsRepositoryInterface $newsRepository
     */
    public function __construct(
        \Inchoo\Sample04\Api\NewsRepositoryInterface $newsRepository
    ) {
        $this->newsRepository = $newsRepository;
    }

    public function getNewsById($id)
    {
        $news = '';
        try {
            $news = $this->newsRepository->getById($id);
            $news->setContent('wooooo');
            $this->newsRepository->save($news);
        } catch (NoSuchEntityException $e) {
            echo $e->getMessage();
        }
        return $news;
    }
}
