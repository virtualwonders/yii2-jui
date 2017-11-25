<?php

namespace virtualwonders\jui;

use yii\web\AssetBundle;

/**
 * Main YFP JqueryUiAsset bundle.
 */
class JqueryUiAsset extends AssetBundle
{
	public $sourcePath = '@vendor/virtualwonders/yii2-jui/dist';
	public $css = [
		'css/jquery-ui.css',
	];
	public $js = [
		'js/jquery-ui.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}
