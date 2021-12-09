<?php
namespace Senla\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddData implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $setup = $this->moduleDataSetup;

        $categories[] = ['title' => 'first category', 'slug' => 'first_category'];
        $categories[] = ['title' => 'second category', 'slug' => 'second_category'];
        $categories[] = ['title' => 'third category', 'slug' => 'third_category'];

        $setup->getConnection()->insertArray(
            $setup->getTable('senla_blog_categories'),
            ['title', 'slug'],
            $categories
        );

        $posts[] = ['title' => 'first post', 'category_id' => 1, 'slug' => 'first_post', 'preview_text' => 'first post preview', 'text' => 'first post text'];
        $posts[] = ['title' => 'second post', 'category_id' => 2, 'slug' => 'second_post', 'preview_text' => 'second post preview', 'text' => 'second post text'];
        $posts[] = ['title' => 'third post', 'category_id' => 3, 'slug' => 'third_post', 'preview_text' => 'third post preview', 'text' => 'third post text'];

        $setup->getConnection()->insertArray(
            $setup->getTable('senla_blog_posts'),
            ['title', 'category_id', 'slug', 'preview_text', 'text'],
            $posts
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }
}
