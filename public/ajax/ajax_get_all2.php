<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
//header('Content-Type: text/html; charset=UTF-8');
//header("Content-type: application/json; charset=utf-8");

//error_reporting(0);

header('Content-type: image/jpeg');

require_once('inc_global.php');


$query="SELECT img FROM back ORDER BY RAND() LIMIT 1 ";
$req1 = $pdo->query($query);
$req1->execute();
$list1 = $req1->fetch(PDO::FETCH_OBJ);


$query="select * from quotes ORDER BY RAND() LIMIT 0,1 ";
$req2 = $pdo->query($query);
$req2->execute();
$list2 = $req2->fetch(PDO::FETCH_OBJ);



//echo $list1->img;

$jpg_image = imagecreatefromjpeg('../back/'.$list1->img);
$blackoverlay = imagecreatefrompng('../back/black.png');

$white = imagecolorallocate($jpg_image, 255, 255, 255);
$font_path = 'antigonimed.ttf';
$frase = $list2->frase."<br><br>".$list2->autore;

$width = 800;
$height = 800;

$out = imagecreatetruecolor($width, $height);
imagecopyresampled($out, $jpg_image, 0, 0, 0, 0, $width, $height, $width, $height);
imagecopyresampled($out, $blackoverlay, 0, 0, 0, 0, $width, $height, $width, $height);

/*
function ImageTTFCenter($image, $text, $font, $size, $angle = 45)
{
    $xi = imagesx($image);
    $yi = imagesy($image);

    $box = imagettfbbox($size, $angle, $font, $text);

    $xr = abs(max($box[2], $box[4]));
    $yr = abs(max($box[5], $box[7]));

    $x = intval(($xi - $xr) / 2);
    $y = intval(($yi + $yr) / 2);

    return array($x, $y);
}

$x=180;
$y=180;
list($x, $y) = ImageTTFCenter($jpg_image, $frase, $font_path, 20);
*/

//imagettftext($out, 20, 0, $x, $y+1, $white, $font_path, $frase);

function imagettfmultilinetext($image, $size, $angle, $x, $y, $color, $fontfile,  $text, $spacing=1) {
    $lines=explode("<br>",$text);
    for($i=0; $i< count($lines); $i++) {
        $newY=$y+($i * $size * $spacing);
        $hbox = 40 * count($lines);
        $nuovay = (800-$hbox)/2 - $y;

         imagettftext($image, $size, $angle, $x, $nuovay+$newY, $color, $fontfile,  $lines[$i]);

    }
    return null;
}
     $new_text = wordwrap($frase, 30, '<br>');
    imagettfmultilinetext($out, 30, 0, 50, 90, $white, $font_path,  $new_text, 2);




// Print Text On Image
//imagettftext($jpg_image, 20, 0, 180, 55, $white, $font_path, $par1);

//$out = imagecreatetruecolor($new_width, $new_height);
//imagecopyresampled($out, $jpg_image, 0, 0, 0, 0, $width, $height, $width, $height);
//imagecopyresampled($out, $image, 355, 161, 0, 0, $new_width, $new_height, $new_width, $new_height);





imagejpeg($out, NULL, 100);


// Send Image to Browser
// imagejpeg($jpg_image);

// Clear Memory
imagedestroy($out);
 
?>
