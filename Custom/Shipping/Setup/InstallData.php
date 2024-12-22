<?php
namespace Custom\Shipping\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\SetupInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, SetupInterface $context)
    {
        $setup->startSetup();

        $data = [
            'carrier' => 'pickup',
            'title' => 'Retirado na Loja',
            'is_active' => 1,
            'method' => 'pickup',
            'method_title' => 'Retirado na Loja',
            'price' => 0,
        ];

        $setup->getConnection()->insert(
            $setup->getTable('sales_order_grid'),
            $data
        );

        $setup->endSetup();
    }
}
