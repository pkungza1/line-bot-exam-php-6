<?php



require "vendor/autoload.php";

$access_token = 'f8Bg08shSon7JRky+bdNu45nYdTKcFaAUlTlxClCsXzFgXgIn8T3Jcbpbtjxug3coTxkpebh3Amy8vONj59eCQVY12YFzjArysShdzxZfpOu2Hc3wz8SiS+FgD6VwDVS7un8ZOd0nMtuLR07FKl7SQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '82bcf007e58e494cb7f00e5362c5ae47';

$pushID = 'U299a312eaf887dbd304427744e45778a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







