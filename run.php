<?php
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/libs.php';
include __DIR__ . '/token.php';

use Discord\Discord;

// We need the object for work with discord
$discord = new Discord([
    'token' => $token,
    //'logging' => false,
]);

// If bot is ready
$discord->on('ready', function ($discord) {
    echo "Bot is ready!\n";

    // Listen for messages.
    $discord->on('message', function ($message, $discord) {

        // Message from chat
        echo $message->content . "\n";

        // Small namespaces hack
        $libs = new Libs();

        // Command selector
        switch (true) {
            case (preg_match("/gimmegus/iu", $message->content)):
            case (preg_match("/gusinator/iu", $message->content)):
            case (preg_match("/gus/iu", $message->content)):
                return $message->channel->sendMessage($libs->get('gus'));
                break;
            case (preg_match("/ось/iu", $message->content)):
                return $message->channel->sendMessage($libs->get('os'));
                break;
        }
    });

});

// Run the application
$discord->run();
