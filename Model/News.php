<?php

namespace Inchoo\Sample03\Model;

use DateTime;
use Inchoo\Sample03\Api\Data\NewsInterface;

/**
 * Class News
 * @package Inchoo\Sample03\Model
 */
class News extends \Magento\Framework\Model\AbstractModel implements NewsInterface
{
    /**
     * Initialize news Model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Inchoo\Sample03\Model\ResourceModel\News::class);
    }

    /**
     * @return array|mixed|string|null
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @param string $title
     * @return NewsInterface|News
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @param string $content
     * @return array|NewsInterface|mixed|null
     */
    public function getContent($content)
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @param string $content
     * @return NewsInterface|News
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * @param DateTime $createdAt
     * @return NewsInterface|News
     */
    public function getCreatedAt(DateTime $createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @param DateTime $createdAt
     * @return NewsInterface|News
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @param DateTime $updatedAt
     * @return NewsInterface|News
     */
    public function getUpdatedAt(DateTime $updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * @param DateTime $updatedAt
     * @return NewsInterface|News
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
