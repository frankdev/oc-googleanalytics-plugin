<?php
/**
 * @link http://www.bdynamic.pt
 * @copyright Copyright (c) 2016 be-Slim
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace Frankdev\GoogleAnalytics\Components;

use Cms\Classes\ComponentBase;
use Frankdev\GoogleAnalytics\Models\Settings;

/**
 * Class Analytics
 * @package Frankdev\GoogleAnalytics\Components
 *
 * @author franciscobarrento
 * @since 1.0.0
 * @date 05/04/2018
 * @time 10:05
 */
class GoogleAnalyticsCode extends ComponentBase
{

    public $isActive = false;

    public $gaCode;

    public function componentDetails()
    {
        return [
            'name' => 'Google Analytics',
            'description' => 'Add Google Analytics to your website'
        ];
    }

    public function onRun()
    {

        if($this->getIsActive()) {
            $this->gaCode = Settings::get('code');
        }
    }

    public function getIsActive()
    {
        $settings = Settings::instance();
        return $this->isActive = $settings->get('active') == 1;
    }

}