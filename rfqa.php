<?php

$url = 'http://letsrevolutionizetesting.com/challenge?id=756775492';

do {
  echo "following the json\n";
	$json = file_get_contents($url . '&format=json');
	$data = json_decode($json);
	$url = isset($data->follow) ? $data->follow : NULL;
} while ( isset($data->follow) );

var_dump($data);
