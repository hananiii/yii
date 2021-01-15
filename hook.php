<?php
// Load composer
require __DIR__ . './vendor/autoload.php';

$bot_api_key  = '1454870068:AAHOlq51Sb4XdXOprApaGXH9wB0Q1CiB8JE';
$bot_username = 'hananifirstbot_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e->getMessage();
}
