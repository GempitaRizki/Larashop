<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9a5d411574f942474cf9fed749635f8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Shop\\Database\\Seeders\\' => 30,
            'Modules\\Shop\\Database\\Factories\\' => 32,
            'Modules\\Shop\\App\\' => 17,
            'Modules\\Shop\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Shop\\Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/seeders',
        ),
        'Modules\\Shop\\Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/factories',
        ),
        'Modules\\Shop\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Modules\\Shop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Shop\\App\\Http\\Controllers\\ShopController' => __DIR__ . '/../..' . '/app/Http/Controllers/ShopController.php',
        'Modules\\Shop\\App\\Models\\Attribute' => __DIR__ . '/../..' . '/app/Models/Attribute.php',
        'Modules\\Shop\\App\\Models\\AttributeOption' => __DIR__ . '/../..' . '/app/Models/AttributeOption.php',
        'Modules\\Shop\\App\\Models\\Category' => __DIR__ . '/../..' . '/app/Models/Category.php',
        'Modules\\Shop\\App\\Models\\Product' => __DIR__ . '/../..' . '/app/Models/Product.php',
        'Modules\\Shop\\App\\Models\\ProductAttribute' => __DIR__ . '/../..' . '/app/Models/ProductAttribute.php',
        'Modules\\Shop\\App\\Models\\ProductImage' => __DIR__ . '/../..' . '/app/Models/ProductImage.php',
        'Modules\\Shop\\App\\Models\\ProductInventory' => __DIR__ . '/../..' . '/app/Models/ProductInventory.php',
        'Modules\\Shop\\App\\Models\\Tag' => __DIR__ . '/../..' . '/app/Models/Tag.php',
        'Modules\\Shop\\App\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/app/Providers/RouteServiceProvider.php',
        'Modules\\Shop\\App\\Providers\\ShopServiceProvider' => __DIR__ . '/../..' . '/app/Providers/ShopServiceProvider.php',
        'Modules\\Shop\\Database\\Seeders\\ProductTableSeeder' => __DIR__ . '/../..' . '/database/seeders/ProductTableSeeder.php',
        'Modules\\Shop\\Database\\Seeders\\ShopDatabaseSeeder' => __DIR__ . '/../..' . '/database/seeders/ShopDatabaseSeeder.php',
        'Modules\\Shop\\Entities\\Attribute' => __DIR__ . '/../..' . '/Entities/Attribute.php',
        'Modules\\Shop\\Entities\\AttributeOption' => __DIR__ . '/../..' . '/Entities/AttributeOption.php',
        'Modules\\Shop\\Entities\\Category' => __DIR__ . '/../..' . '/Entities/Category.php',
        'Modules\\Shop\\Entities\\Product' => __DIR__ . '/../..' . '/Entities/Product.php',
        'Modules\\Shop\\Entities\\ProductAttribute' => __DIR__ . '/../..' . '/Entities/ProductAttribute.php',
        'Modules\\Shop\\Entities\\ProductImage' => __DIR__ . '/../..' . '/Entities/ProductImage.php',
        'Modules\\Shop\\Entities\\ProductInventory' => __DIR__ . '/../..' . '/Entities/ProductInventory.php',
        'Modules\\Shop\\Entities\\Tag' => __DIR__ . '/../..' . '/Entities/Tag.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9a5d411574f942474cf9fed749635f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9a5d411574f942474cf9fed749635f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9a5d411574f942474cf9fed749635f8::$classMap;

        }, null, ClassLoader::class);
    }
}
