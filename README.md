<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Model Statistic</h1>
    <br>
</p>

## Requirements

 - [yii2-chartjs-widget](https://github.com/2amigos/yii2-chartjs-widget)
 - [yii2-date-range](https://github.com/kartik-v/yii2-date-range)
 
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require  dungphanxuan/yii2-model-stat=dev-master
```

or add

```json
"dungphanxuan/yii2-model-stat": "@dev"
```

to the require section of your composer.json.

##  Configure

> **NOTE:** Make sure that you don't have `chart` component configuration in your config files.

Add following lines to your main configuration file:

```php
'modules' => [
    'chart' => [
        'class' => 'dungphanxuan\chart\Module',
    ],
],
```

## Statistic data

Build Stat Url
```php
 <?php echo \yii\helpers\Html::a('Chart',
                     [
                         '/chart/stat',
                         'type' => 'Article',
                         'nm' => 'common\models',
                         'id' => null,
                         'field' => 'created_at',
                         'time_type' => 1
                     ], ['class' => 'btn btn-info'])
                 ?>
```

Screenshot

![Demo Chart](https://cdn.filestackcontent.com/ft9WYYI0QxybbVU42Qae)


## Todo 

 - Init Package
