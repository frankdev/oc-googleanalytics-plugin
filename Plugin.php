<?php
/**
 * @link http://www.bdynamic.pt
 * @copyright Copyright (c) 2016 be-Slim
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace Bdynamic\GoogleAnalytics;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;
use Bdynamic\GoogleAnalytics\Models\Settings;
use Bdynamic\GoogleAnalytics\Components\GoogleAnalyticsCode;

/**
 * Class Plugin
 * @package Bdynamic\GoogleAnalytics
 *
 * @author franciscobarrento
 * @since 1.0.0
 * @date 04/04/2018
 * @time 22:43
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'Simple Google Analytics',
            'description' => 'Provides the Google Analytics tracking',
            'author' => 'Francisco Barrento',
            'homepage' => 'https://bdynamic.pt'
        ];
    }

    public function registerComponents()
    {
        return [
             GoogleAnalyticsCode::class => 'googleAnalytics'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Google Analytics',
                'description' => 'Manage Google Analytics.',
                'category'    => SettingsManager::CATEGORY_CMS,
                'icon'        => 'icon-globe',
                'class'       => Settings::class,
                'order'       => 500,
                'keywords'    => 'google analytics control id',
                'permissions' => ['']
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'bdynamic.googleanalytics.access_settings' => [
                'tab' => 'bdynamic.googleanalytics::lang.permissions.tab',
                'label' => 'bdynamic.googleanalytics::lang.permissions.settings'
            ]
        ];
    }

}