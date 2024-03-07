<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;
use Modules\Shop\Repositories\Front\ProductRepository;

class ShopServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        // Registering the ProductRepositoryInterface binding
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register translations, config, views, and migrations
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path('Shop', 'Database/Migrations'));
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Shop', 'Config/config.php') => config_path('shop.php'),
        ], 'config');

        $this->mergeConfigFrom(
            module_path('Shop', 'Config/config.php'), 'shop'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/shop');

        $sourcePath = module_path('Shop', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', 'shop-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), 'shop');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/shop');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'shop');
        } else {
            $this->loadTranslationsFrom(module_path('Shop', 'Resources/lang'), 'shop');
        }
    }

    /**
     * Get the paths that should be published.
     *
     * @return array
     */
    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (config('view.paths') as $path) {
            if (is_dir($path . '/modules/shop')) {
                $paths[] = $path . '/modules/shop';
            }
        }
        return $paths;
    }
}