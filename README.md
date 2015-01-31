ChartJs Widget
===================

Renders a [ChartJs plugin](http://www.chartjs.org/docs/) widget

Credits
-------

This has been forked from https://github.com/2amigos/yii2-chartjs-widget to replace the old, local 0.2 version of chart.js with the 1.0.1 CDN version of it.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).
As this is a fork of an existing package, you need to do two things:

1) add the following to your project's composer.json

```json
"repositories": [
	{
		"type": "vcs",
		"url": "https://github.com/antipodos/yii2-chartjs-widget"
	}
],
```

2) Run one the following commands / actions, the version `dev-cdn` is key!

```
php composer.phar require antipodos/yii2-chartjs-widget "dev-cdn"
```
or add

```json
"antipodos/yii2-chartjs-widget" : "dev-cdn"
```

to the require section of your application's `composer.json` file.

Usage
-----
Using a model:

```
use dosamigos\chartjs\Chart;

<?= Chart::widget([
    'type' => 'Line',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => [
        'labels' => ["January", "February", "March", "April", "May", "June", "July"],
        'datasets' => [
            [
                'fillColor' => "rgba(220,220,220,0.5)",
                'strokeColor' => "rgba(220,220,220,1)",
                'pointColor' => "rgba(220,220,220,1)",
                'pointStrokeColor' => "#fff",
                'data' => [65, 59, 90, 81, 56, 55, 40]
            ],
            [
                'fillColor' => "rgba(151,187,205,0.5)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#fff",
                'data' => [28, 48, 40, 19, 96, 27, 100]
            ]
        ]
    ]
]);
?>
```
ChartJs has lots of configuration options. For further information, please check the
[ChartJs plugin](http://www.chartjs.org/docs/) website.
