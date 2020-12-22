<?php

namespace Inchoo\Sample03\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface CommentSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get news list.
     *
     * @return \Inchoo\Sample03\Api\Data\[]
     */
    public function getItems();

    /**
     * Set news list.
     *
     * @param \Inchoo\Sample03\Api\Data\NewsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
