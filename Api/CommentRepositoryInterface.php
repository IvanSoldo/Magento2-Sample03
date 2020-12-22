<?php

namespace Inchoo\Sample03\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CommentRepositoryInterface
{
    /**
     * Retrieve news.
     *
     * @param int $commentId
     * @return \Inchoo\Sample03\Api\Data\CommentInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($commentId);

    /**
     * Save news.
     *
     * @param \Inchoo\Sample03\Api\Data\CommentInterface $comment
     * @return \Inchoo\Sample03\Api\Data\CommentInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\CommentInterface $comment);

    /**
     * Delete news.
     *
     * @param \Inchoo\Sample03\Api\Data\CommentInterface $comment
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\CommentInterface $comment);

    /**
     * Retrieve news matching the specified search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Inchoo\Sample03\Api\Data\NewsSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

}
