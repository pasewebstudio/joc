<?php
$dir = "public/back/";

// Sort in ascending order - this is default
$a = scandir($dir);
 
print_r($a);

foreach($a as $foto){
echo "(NULL, '".$foto."'),<br />";
}
 ?>