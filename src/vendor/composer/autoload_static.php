<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\SlwAdminNotice' => __DIR__ . '/../..' . '/app/class-slw-admin-notice.php',
        'App\\SlwMain' => __DIR__ . '/../..' . '/app/class-slw-main.php',
        'App\\Traits\\SlwBarcodesTab' => __DIR__ . '/../..' . '/app/traits/trait-slw-barcodes-tab.php',
        'App\\Traits\\SlwOrderItem' => __DIR__ . '/../..' . '/app/traits/trait-slw-order-item.php',
        'App\\Traits\\SlwProductListing' => __DIR__ . '/../..' . '/app/traits/trait-slw-product-listing.php',
        'App\\Traits\\SlwProductTaxonomy' => __DIR__ . '/../..' . '/app/traits/trait-slw-product-taxonomy.php',
        'App\\Traits\\SlwShortcodes' => __DIR__ . '/../..' . '/app/traits/trait-slw-shortcodes.php',
        'App\\Traits\\SlwStockLocationsTab' => __DIR__ . '/../..' . '/app/traits/trait-slw-stock-locations-tab.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36::$classMap;

        }, null, ClassLoader::class);
    }
}