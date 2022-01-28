<?php
include("mergePicture.php");

$f1 = "../men1a.png";
$f2 = "../men1b.png";


$imagem = new mergePictures($f1,$f2);


$imagem->merge("up");
$imagem->save("imgs","foto3","jpg");

$imagem->merge("down");
$imagem->save("imgs","foto2","bmp");

$imagem->over();
$imagem->save("imgs","foto1","gif");

echo "works!!";
?>