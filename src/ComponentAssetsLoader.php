<?php

namespace Freekattema\Component;

use Freekattema\WordpressThemeBuffer\Buffer;

final class ComponentAssetsLoader
{
    private function __construct() {}

    public static function attach(string $component)
    {
        $cssFile = '/dist/exports/' . $component . '.css';
        if (file_exists(get_template_directory() . $cssFile)) {
            Buffer::add_css(get_template_directory_uri() . $cssFile);
        }
    }
}