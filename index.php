<?php
include_once "Ago.php";
$ago = new Ago();
$post_at = "2019-09-31 20:17:16";//now()

$unixTimestamp = $ago->convertToUnixTimestamp($post_at);
$convert = $ago->convertToAgoFormat($unixTimestamp);
echo $convert;