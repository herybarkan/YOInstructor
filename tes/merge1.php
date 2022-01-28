<?php
// Create image instances
$dest = imagecreatefromgif('men1a.png');
$src = imagecreatefromgif('men1b.png');

// Copy and merge
//imagecopymerge($dest, $src, 400, 800, 400, 800, 800, 800, 75);
imagecopymerge($dest, $src, 10, 9, 0, 0, 181, 180, 100); //have to play with these numbers for it to work for you, etc.

// Output and free from memory
header('Content-Type: image/png');
imagegif($dest);

imagedestroy($dest);
imagedestroy($src);
?>