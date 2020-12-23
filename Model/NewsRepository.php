<?php

namespace Inchoo\Sample03\Model;

use Inchoo\Sample03\Api\Data\NewsInterface;
use Inchoo\Sample03\Api\Data\NewsSearchResultsInterface;
use Inchoo\Sample03\Api\NewsRepositoryInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @var \Inchoo\Sample03\Api\Data\NewsInterfaceFactory
     */
    protected $newsModelFactory;

    /**
     * @var \Inchoo\Sample03\Model\ResourceModel\News
     */
    protected $newsResource;

    /**
     * @var \Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory
     */
    protected $newsCollectionFactory;

    /**
     * @var \Inchoo\Sample03\Api\Data\NewsSearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    public function __construct(
        \Inchoo\Sample03\Api\Data\NewsInterfaceFactory $newsModelFactory,
        \Inchoo\Sample03\Model\ResourceModel\News $newsResource,
        \Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory $newsCollectionFactory,
        \Inchoo\Sample03\Api\Data\NewsSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->newsModelFactory = $newsModelFactory;
        $this->newsResource = $newsResource;
        $this->newsCollectionFactory = $newsCollectionFactory;

        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @param int $newsId
     * @return NewsInterface
     * @throws NoSuchEntityException
     */
    public function getById($newsId)
    {
        $news = $this->newsModelFactory->create();
        $this->newsResource->load($news, $newsId);
        if (!$news->getId()) {
            throw new NoSuchEntityException(__('News with id "%1" does not exist.', $newsId));
        }
        return $news;
    }

    /**
     * @param NewsInterface $news
     * @return NewsInterface
     * @throws CouldNotSaveException
     */
    public function save(NewsInterface $news)
    {
        try {
            $this->newsResource->save($news);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $news;
    }

    /**
     * @param NewsInterface $news
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(NewsInterface $news)
    {
        try {
            $this->newsResource->delete($news);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return NewsSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        /** @var \Inchoo\Sample04\Model\ResourceModel\News\Collection $collection */
        $collection = $this->newsCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var NewsSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}
