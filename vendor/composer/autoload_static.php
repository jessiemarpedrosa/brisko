<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65277b3585d1b2ae053b06fa818d4810
{
    public static $files = array (
        'bfe4c115bf472a7ffc0ecf6af254fa3b' => __DIR__ . '/../..' . '/src/Includes/actions.php',
        'e2dfbebf28d16a9491ae3797ab185a35' => __DIR__ . '/../..' . '/src/Includes/custom-header.php',
        '07f7b1f0c3cda4b437f2c8fec7b4f438' => __DIR__ . '/../..' . '/src/Includes/customizer.php',
        '99bc6bf0598402d4282cd7e6ecbbe3a2' => __DIR__ . '/../..' . '/src/Includes/template-tags.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brisko\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brisko\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Brisko\\Activate' => __DIR__ . '/../..' . '/src/Activate.php',
        'Brisko\\Customize\\Controls\\Control' => __DIR__ . '/../..' . '/src/Customize/Controls/Control.php',
        'Brisko\\Customize\\Controls\\HeaderControl' => __DIR__ . '/../..' . '/src/Customize/Controls/HeaderControl.php',
        'Brisko\\Customize\\Controls\\SeparatorControl' => __DIR__ . '/../..' . '/src/Customize/Controls/SeparatorControl.php',
        'Brisko\\Customize\\Customizer' => __DIR__ . '/../..' . '/src/Customize/Customizer.php',
        'Brisko\\Enqueue' => __DIR__ . '/../..' . '/src/Enqueue.php',
        'Brisko\\Header' => __DIR__ . '/../..' . '/src/Header.php',
        'Brisko\\Options' => __DIR__ . '/../..' . '/src/Options.php',
        'Brisko\\Template' => __DIR__ . '/../..' . '/src/Template.php',
        'Brisko\\Theme' => __DIR__ . '/../..' . '/src/Theme.php',
        'Brisko\\View\\Archive' => __DIR__ . '/../..' . '/src/View/Archive.php',
        'Brisko\\View\\CanvasPage' => __DIR__ . '/../..' . '/src/View/CanvasPage.php',
        'Brisko\\View\\FooterCredits' => __DIR__ . '/../..' . '/src/View/FooterCredits.php',
        'Brisko\\View\\FullWidthPage' => __DIR__ . '/../..' . '/src/View/FullWidthPage.php',
        'Brisko\\View\\IndexPage' => __DIR__ . '/../..' . '/src/View/IndexPage.php',
        'Brisko\\View\\Layout' => __DIR__ . '/../..' . '/src/View/Layout.php',
        'Brisko\\View\\Page' => __DIR__ . '/../..' . '/src/View/Page.php',
        'Brisko\\View\\Page404' => __DIR__ . '/../..' . '/src/View/Page404.php',
        'Brisko\\View\\Search' => __DIR__ . '/../..' . '/src/View/Search.php',
        'Brisko\\View\\Sidebar' => __DIR__ . '/../..' . '/src/View/Sidebar.php',
        'Brisko\\View\\Single' => __DIR__ . '/../..' . '/src/View/Single.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65277b3585d1b2ae053b06fa818d4810::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65277b3585d1b2ae053b06fa818d4810::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65277b3585d1b2ae053b06fa818d4810::$classMap;

        }, null, ClassLoader::class);
    }
}