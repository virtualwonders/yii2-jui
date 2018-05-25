<?php

namespace virtualwonders\jui;

use yii\web\AssetBundle;

/**
 * Main YFP JqueryUiAsset bundle.
 */
class JuiAsset extends AssetBundle
{
	public $sourcePath = '@vendor/virtualwonders/yii2-jui/dist';
	public $js = [
		'js/jquery-ui.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
