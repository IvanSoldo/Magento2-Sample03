<?php


namespace Inchoo\Sample03\ViewModel;


use Inchoo\Sample03\Api\NewsRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewsListViewModel implements ArgumentInterface
{

    /**
     * @var \Inchoo\Sample03\Api\NewsRepositoryInterface
     */
    protected $newsRepository;

    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var \Magento\Framework\Api\SortOrder
     */
    protected $sortOrder;

    /**
     * @param NewsRepositoryInterface $newsRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param SortOrder $sortOrder
     */
    public function __construct(
        \Inchoo\Sample04\Api\NewsRepositoryInterface $newsRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SortOrder $sortOrder
    ) {
        $this->newsRepository = $newsRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->sortOrder = $sortOrder;
    }

    public function getNewsList()
    {
        $this->sortOrder
            ->setField('news_id')
            ->setDirection("DESC");

        $searchCriteria = $this->searchCriteriaBuilder->create();
        $searchCriteria
            ->setSortOrders([$this->sortOrder])
            ->setPageSize(10);
        $newsList = $this->newsRepository->getList($searchCriteria)->getItems();

        return $newsList;
    }
}
