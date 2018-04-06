<?php
/**
 * @link http://www.bdynamic.pt
 * @copyright Copyright (c) 2016 be-Slim
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace Bdynamic\GoogleAnalytics\Models;

/**
 * Class Settings
 * @package Bdynamic\GoogleAnalytics\Models
 *
 * @author franciscobarrento
 * @since 1.0.0
 * @date 05/04/2018
 * @time 08:05
 */
class Settings extends \Model
{


    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'frankdev_googleanalytics';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';


}