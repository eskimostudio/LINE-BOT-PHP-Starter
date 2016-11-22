<?php
$access_token = 'otFDgc4MoxShnB9RIJjb5sPP21ORxhJDnVeCfL2A3G/JbQxFRST1ulfWv3C4dkJmp0IneNMcXv8ddfBqEAEVQ8IijJ3/5glbZU9Sb/AxO+IzntK2qx/AH1bEyLU70eDB0NUazwHcVaN6Gs71wakKxwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
