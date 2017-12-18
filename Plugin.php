<?php

namespace Pug\October;

use App;
use System\Classes\PluginBase;

/**
 * Pug (ex-Jade) Plugin.
 *
 * @see https://www.phug-lang.com
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Pug (ex-Jade)',
            'description' => 'Use Pug (ex-Jade) templates in OctoberCMS.',
            'author'      => 'kylekatarnls',
            'icon'        => 'icon-pug',
            'homepage'    => 'https://github.com/pug-php/oc-pug-plugin',
        ];
    }

    /**
     * Register the laravel service provider.
     */
    public function boot()
    {
        App::register('\\Bkwld\\LaravelPug\\ServiceProvider');
    }
}
