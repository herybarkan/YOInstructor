<?php

$list = array(
    'men1a.png',
    'men1b.png',
    'men1a.png',
    'men1b.png'
    );

# first image to start Imagick()
$im = new Imagick($list[0]);
$ilist = array();

# loop the others
for($i = 1; $i < count($list); $i++)
{
    $ilist[$i] = new Imagick($list[$i]);
    $im->addImage($ilist[$i]);
}

$im->resetIterator();
$combined = $im->appendImages(false);
$combined->setImageFormat("png");
header('Content-Type: image/png');
echo $combined;

?>