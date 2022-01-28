<?php
error_reporting(0);
@ini_set('display_errors', 0);

require_once 'Connections/con.php';

date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];

$select_stmt_in=$db->prepare("INSERT INTO tbl_share (kd_instructor, ip_address, tgl, jam) VALUES ('$_GET[kd_inst]', '$ip', '$tglin', '$jamin')");	
$select_stmt_in->execute();
?>
<html>
<head>
<title>Book wellness instructor anytime and anywhere</title>
<!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
<meta property="og:url"           content="https://yoinstructor.com/?com=bprofile&kd_inst=<?php echo $_GET['kd_inst']; ?>" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="Book wellness instructor anytime and anywhere" />
<meta property="og:description"   content="YO Instructor is a platform and center for gathering personal training directories. You can look for personal training according to your needs." />
<meta property="og:image"         content="https://yoinstructor.com/foto/user/<?php echo $_GET['kd_inst']; ?>.png" />
<meta http-equiv="refresh" content="0;url=https://yoinstructor.com/?com=bprofile&kd_inst=<?php echo $_GET['kd_inst']; ?>" />

</head>
<body>

</body>
</html>