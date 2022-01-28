<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>
<?php
$select_stmt=$db->prepare("UPDATE instructor_detail SET 
fb='$_GET[get_fb2]',
tw='$_GET[get_tw2]',
ig='$_GET[get_ig2]',
yt='$_GET[get_yt2]'
WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

$select_stmt_sos=$db->prepare("SELECT * FROM instructor_detail WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_sos->execute();
$row_sos=$select_stmt_sos->fetch(PDO::FETCH_ASSOC);

?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<a itemprop="url" href="<?php echo $row_sos['fb']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_facebook edgtf-author-social-facebook edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                     <a itemprop="url" href="<?php echo $row_sos['tw']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_twitter edgtf-author-social-twitter edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                     <a itemprop="url" href="<?php echo $row_sos['ig']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_instagram edgtf-author-social-instagram edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
                     <a itemprop="url" href="<?php echo $row_sos['yt']; ?>" target="_blank">
                     <span aria-hidden="true" class="edgtf-icon-font-elegant social_youtube edgtf-author-social-youtube edgtf-author-social-icon " style="font-size:30px; margin-right:15px;"></span> </a>
