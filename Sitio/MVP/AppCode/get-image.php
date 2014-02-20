<?php

$lat=$_GET['lat'];
$lng=$_GET['lng'];

$ch = curl_init();

$url="http://www.panoramio.com/map/get_panoramas.php?set=public&from=0&to=20&minx=".($lng-.01)."&miny=".($lat-.01)."&maxx=".($lng+.01)."&maxy=".($lat+.01)."&size=medium&mapfilter=true";
//echo($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result=curl_exec($ch);
$JSON=json_decode($result);

curl_close($ch);


echo $JSON->photos[array_rand($JSON->photos)]->photo_file_url;


?>