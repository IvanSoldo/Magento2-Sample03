<?php

declare(strict_types=1);

namespace Inchoo\Sample03\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = 'inchoo_news';

        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            if ($setup->getConnection()->isTableExists($setup->getTable($tableName))) {
                $setup->getConnection()->addColumn(
                    $setup->getTable($tableName),
                    'created_at',
                    [
                        'type' => Table::TYPE_TIMESTAMP,
                        'length' => 255,
                        'nullable' => true,
                        'comment' => 'created at',
                        'default' => Table::TIMESTAMP_INIT
                    ]
                );
                $setup->getConnection()->addColumn(
                    $setup->getTable($tableName),
                    'updated_at',
                    [
                        'type' => Table::TYPE_TIMESTAMP,
                        'length' => 255,
                        'nullable' => true,
                        'comment' => 'updated at',
                        'default' => Table::TIMESTAMP_INIT_UPDATE

                    ]
                );

                $setup->getConnection()->addColumn(
                    $setup->getTable($tableName),
                    'content',
                    [
                        'type' => Table::TYPE_TEXT,
                        'length' => 255,
                        'nullable' => true,
                        'comment' => 'content'
                    ]
                );

                $setup->getConnection()->addForeignKey(
                    $setup->getFkName('inchoo_news_comments', 'news_id', 'inchoo_news', 'news_id'),
                    $setup->getTable('inchoo_news_comments'),
                    'news_id',
                    $setup->getTable('inchoo_news'),
                    'news_id',
                );
            }
        }
        $setup->endSetup();
    }
}
