<?php
ob_start();
session_start();

echo "create session= ses-12345678";
echo "<br>";
$_SESSION['tes']="ses-12345678";
echo "tampilkan session";
echo "<br>";
echo $_SESSION['tes'];
?>