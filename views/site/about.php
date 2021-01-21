<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\helpers\Url;
use \dosamigos\chartjs\ChartJs;
use miloschuman\highcharts\Highcharts;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>

    <h2>Generate PDF</h2>
    <button onclick="document.location='index.php?r=site%2Fgeneratepdf'">Click</button>

    <h2>Save as</h2>
    <li>
        <button>PNG</button>
        <button>SVG</button>
        <button>JPEG</button>

    </li>

    <h2>Charts</h2>
    <button onclick="document.location='index.php?r=site%2Fchart'">To chart</button>
</div>