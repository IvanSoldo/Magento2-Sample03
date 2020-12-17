<?php

declare(strict_types=1);

namespace Inchoo\Sample03\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = 'inchoo-news';

        $setup->getConnection()->addColumn(
            $setup->getTable($tableName),
            'created_at',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                'length' => 255,
                'nullable' => true,
                'comment' => 'created at'
            ]
        );
        $setup->getConnection()->addColumn(
            $setup->getTable($tableName),
            'updated_at',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                'length' => 255,
                'nullable' => true,
                'comment' => 'updated at'
            ]
        );

        $setup->getConnection()->addColumn(
            $setup->getTable($tableName),
            'content',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => 255,
                'nullable' => true,
                'comment' => 'content'
            ]
        );

        $setup->endSetup();
    }
}
