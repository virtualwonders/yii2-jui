Yii2-jui
========
Jquery UI library for Virtual Wonders

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist virtualwonders/yii2-jui "*"
```

or add

```
"virtualwonders/yii2-jui": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use  JqueryUiAsset as a dependency class to your own AssetBundle Class :


    class BaseAsset extends AssetBundle
    {
        public $depends = [
	       'virtualwonders\jui\JqueryUiAsset',
        ];
    }
