<?php

namespace Inchoo\Sample03\Api\Data;

use DateTime;

interface NewsInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const NEWS_ID       = 'news_id';
    const TITLE         = 'title';
    const CONTENT       = 'content';
    const CREATED_AT    = 'created_at';
    const UPDATED_AT    = 'updated_at';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set ID
     *
     * @param string $id
     * @return NewsInterface
     */
    public function setId($id);

    /**
     * Set title
     *
     * @param string $title
     * @return NewsInterface
     */
    public function setTitle($title);

    /**
     * Get content
     *
     * @param string $content
     * @return NewsInterface
     */
    public function getContent($content);

    /**
     * Set content
     *
     * @param string $content
     * @return NewsInterface
     */
    public function setContent($content);

    /**
     * Get created at
     *
     * @param DateTime $createdAt
     * @return NewsInterface
     */
    public function getCreatedAt(DateTime $createdAt);

    /**
     * Set created at
     *
     * @param DateTime $createdAt
     * @return NewsInterface
     */
    public function setCreatedAt(DateTime $createdAt);

    /**
     * Get updated at
     *
     * @param DateTime $updatedAt
     * @return NewsInterface
     */
    public function getUpdatedAt(DateTime $updatedAt);

    /**
     * Set updated at
     *
     * @param DateTime $updatedAt
     * @return NewsInterface
     */
    public function setUpdatedAt(DateTime $updatedAt);
}
