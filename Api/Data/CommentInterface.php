<?php

namespace Inchoo\Sample03\Api\Data;

Interface CommentInterface
{
    const COMMENT_ID    = 'comment_id';
    const NEWS_ID       = 'news_id';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param string $id
     * @return NewsInterface
     */
    public function setId($id);

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getNewsId();

    /**
     * Set ID
     *
     * @param string $newsId
     * @return NewsInterface
     */
    public function setNewsId($newsId);
}
