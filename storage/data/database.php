<?php   


$json_string = file_get_contents('C:\Web\Week7\Day35\Hackathlone3\laravel\storage\data\clients.json'); // replace path with a real path
$data = json_decode($json_string); // decode the string into data

