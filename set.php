<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '1454870068:AAHOlq51Sb4XdXOprApaGXH9wB0Q1CiB8JE';
$bot_username = 'hananifirstbot_bot';
$hook_url     = 'https://api.telegram.org/bot1454870068:AAHOlq51Sb4XdXOprApaGXH9wB0Q1CiB8JE/setwebhook?url=https://127.0.0.1:80/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}