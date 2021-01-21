<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use \dosamigos\chartjs\ChartJs;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;

$this->title = 'Charts';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h2>Charts</h2>
    <div>
        Test chart using chart js
    </div>
    <li>
        <refer:li>https://github.com/2amigos/yii2-chartjs-widget</refer:li>
    </li>
    <li>
        <refer:li>https://www.chartjs.org/docs/latest/</refer:li>
    </li>
</div>

<?= ChartJs::widget([
    'type' => 'line',
    'options' => [
        'height' => 100,
        'width' => 400
    ],
    'data' => [
        'labels' => ["Apples", "Bananas", "Oranges"],
        'datasets' => [
            [
                'label' => "Fakhri",
                'backgroundColor' => "rgba(179,181,198,0.2)",
                'borderColor' => "rgba(179,181,198,1)",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => [1, 0, 4]
            ],
            [
                'label' => "Wan",
                'backgroundColor' => "rgba(255,99,132,0.2)",
                'borderColor' => "rgba(255,99,132,1)",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data' => [5, 7, 3]
            ]
        ]
    ],

]);
?>

<div>
    <div>Test chart using high chart</div>
    <li>
        <refer:li>https://www.yiiframework.com/extension/highcharts</refer:li>
    </li>
    <li>
        <refer:li>https://github.com/miloschuman/yii2-highcharts</refer:li>
    </li>
    <li>
        <refer:li>https://www.highcharts.com/demo/line-basic</refer:li>
    </li>
    <li>
        <refer:li>https://api.highcharts.com/highcharts/lang</refer:li>
    </li>
</div>


<?=
Highcharts::widget([
    'scripts' => [
        'highcharts-more',
        'modules/exporting',
        'themes/grid-light',
    ],
    'options' => '{
            "title": { "text": "Fruit Consumption" },
            "xAxis": {
                "categories": ["Apples", "Bananas", "Oranges"]
            },
            "yAxis": {
                "title": { "text": "Fruit eaten" }
            },
            "series": [
                { "name": "Fakhri", "data": [1, 0, 4] },
                { "name": "Wan", "data": [5, 7,3] }
            ],
            "exporting": {
                "allowHTML": true
            }

    }'
]);

?>