<?php

$word='Hello';
$api_url = "http://thesaurus.altervista.org/thesaurus/v1?key=LNOnxgA1WgGtwOkecl7y&word=$word&output=json&language=en_US";

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

$value = (array) $response_data;

$result = (array) $value['response'][0];
$result1 = (array) $result['list'];

print_r($result1['synonyms']);

?>
