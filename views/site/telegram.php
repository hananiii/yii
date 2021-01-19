<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->title = 'Telegram';
$this->params['breadcrumbs'][] = $this->title;

// $path = 'https://api.telegram.org/bot1454870068:AAHOlq51Sb4XdXOprApaGXH9wB0Q1CiB8JE';

// $update = json_decode(file_get_contents("php://input"), TRUE);

// $chatId = $update["message"]["chat"]["id"];
// $message = $update["message"]["text"];

// if (strpos($message, "/weather") === 0) {
//     $location = substr($message, 9);

//     $weather = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q="
//     . $location . "&appid=mytoken"), TRUE)["weather"]["main"];
    
//     file_get_contents($path . "/sendmessage?chat_id=" . $chatId . "&text=Here's the weather in " . $location . ": " . $weather);
// }

// ?>
<div class="site-about">
    <h1><?= Html ::encode($this->title) ?></h1>

    <p>
        This is the Telegram page. 
    </p>
    <h2>To generate pdf</h2>
    <button (click)="${event-handler}(${event})">text</button>
    ${}
</div>
