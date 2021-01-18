<?php

/* @var $this yii\web\View */


require __DIR__ . '../../../vendor/autoload.php'; // '/vendor/autoload.php';
use yii\helpers\Html;

// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output();
$this->title = 'Generate Pdf';
$this->params['breadcrumbs'][] = $this->title;

// 
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the generated pdf using mpdf library
    </p>
    <br>
    <h2>How?</h2>
    <p>
        Refer:
        <li>
            <refer:li>https://www.youtube.com/watch?v=MQHSG00vBQk</refer:li>
        </li>
        <li>
            <refer:li>https://github.com/mpdf/mpdf</refer:li>
        </li>
    </p>
</div>