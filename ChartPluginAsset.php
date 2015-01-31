<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace dosamigos\chartjs;

use yii\web\AssetBundle;

/**
 * 
 * ChartPluginAsset.php
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */
class ChartPluginAsset extends AssetBundle
{
	const CHARTJS = 'http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/';

	public function init()
	{
		$this->js = YII_DEBUG ? [self::CHARTJS . 'Chart.js'] : [self::CHARTJS . 'Chart.min.js'];
	}
}