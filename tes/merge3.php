<?php
function mergeImage(){
        $src = imagecreatefromjpeg('men1a.png');
        $dst = imagecreatefromjpeg('men1b.png');
        imagecopymerge($dst, $src, 0, 0, 0, 0, 800, 800, 100);
        header('Content-type: image/png');
        imagejpeg($dst);
        imagedestroy($src);
        imagedestroy($dst);
    }
mergeImage();
?>