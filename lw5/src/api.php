<?php

$curl = curl_init('https://favqs.com/api/qotd');
curl_setopt($curl, CURLOPT_POST, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);
$resultCurl = curl_exec($curl);
$resultCurl = json_decode($resultCurl);
$result = $resultCurl->quote->body;
echo $result;
curl_close($curl);   
