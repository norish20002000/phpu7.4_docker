<?php
$url = "https://query1.finance.yahoo.com/v7/finance/chart/AAPL?range=1d&interval=1m&indicators=quote&includeTimestamps=true";
$options = array(
    'http' => array(
        'method' => 'GET'
    )
);
$result = file_get_contents($url, true, stream_context_create($options));

var_dump(json_decode($result, true));
