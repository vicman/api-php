<?php
$api = new \Dacast\Api('65041_5e0e9cca5dcda8e8b36a');
$data = [
    'id' => 'SET_OWN_PLAYLIST_ID'
];

$playlist = $api->playlist->delete($data);
var_dump($playlist);