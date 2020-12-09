<?php
convertImage('annexes/original/1-1.jpeg','annexes/redimensionner/1-1.jpeg','900','1200',100);

function convertImage($source,$dst,$width,$height,$quality)
{
    // [0]===>width, [1]=>height
    $imageSize = getimagesize($source);

    $imageRessource = imagecreatefromjpg($source);

    $imageFinal = imagecreatetruecolor($width,$height);

    $final = imagecopyresampled($imageFinal,$imageRessource,0,0,0,0,$width,$height,$imageSize[0],$imageSize[1]);

    imagejpeg($imageFinal,$dst,$quality);
}


?>