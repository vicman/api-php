<?php
$api = new \Dacast\Api('65041_5e0e9cca5dcda8e8b36a');
$api->
$channel = $api->live->uploadThumbnail([
    "id" => 'SET_YOUR_OWN_CHANNEL_ID',
    "file" => "./test/test.jpg" //image source
]);*/
var_dump($channel);