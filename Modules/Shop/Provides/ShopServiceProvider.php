<?php 

namespace Modules\Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;
use Modules\Shop\Repositories\Front\ProductRepository;

class ShopServiceProvider extends ServiceProvider
{
    protected $moduleName = 'Shop';
    protected $moduleNameLower = 'shop';

    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
        $this->registerRepositories();
    }

    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths; // Tambahkan return statement ini
    }

    private function registerRepositories()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        ); // Tambahkan semicolon di sini
    }
}
