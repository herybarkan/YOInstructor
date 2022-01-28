<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>
<?php

$select_stmt_cek_sch=$db->prepare("SELECT * FROM instructor_schedule WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek_sch->execute();
$row_cek_sch=$select_stmt_cek_sch->fetch(PDO::FETCH_ASSOC);

if ($row_cek_sch['id_']=="")
{
	$select_stmt=$db->prepare("INSERT INTO instructor_schedule (
	kd_instructor,
	mon_start,
	mon_end,
	tue_start,
	tue_end,
	wed_start,
	wed_end,
	thurs_start,
	thurs_end,
	fri_start,
	fri_end,
	sat_start,
	sat_end,
	sun_start,
	sun_end
	) VALUES (
	'$_SESSION[yo_kd_user]',
	 '$_GET[get_mon_s]',
'$_GET[get_mon_e]',
'$_GET[get_tue_s]',
'$_GET[get_tue_e]',
'$_GET[get_wed_s]',
'$_GET[get_wed_e]',
'$_GET[get_thurs_s]',
'$_GET[get_thurs_e]',
'$_GET[get_fri_s]',
'$_GET[get_fri_e]',
'$_GET[get_sat_s]',
'$_GET[get_sat_e]',
'$_GET[get_sun_s]',
'$_GET[get_sun_e]'
	)
");	
$select_stmt->execute();
}
elseif ($row_cek_sch['id_']!="")
{
$select_stmt=$db->prepare("UPDATE instructor_schedule SET 
mon_start='$_GET[get_mon_s]',
mon_end='$_GET[get_mon_e]',
tue_start='$_GET[get_tue_s]',
tue_end='$_GET[get_tue_e]',
wed_start='$_GET[get_wed_s]',
wed_end='$_GET[get_wed_e]',
thurs_start='$_GET[get_thurs_s]',
thurs_end='$_GET[get_thurs_e]',
fri_start='$_GET[get_fri_s]',
fri_end='$_GET[get_fri_e]',
sat_start='$_GET[get_sat_s]',
sat_end='$_GET[get_sat_e]',
sun_start='$_GET[get_sun_s]',
sun_end='$_GET[get_sun_e]'
WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
}

$select_stmt_sch=$db->prepare("SELECT * FROM instructor_schedule WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_sch->execute();
$row_sch=$select_stmt_sch->fetch(PDO::FETCH_ASSOC);

?>

<?php
//echo $_SESSION['yo_kd_user'];
?>


            
<div class="frame-5 opensans-normal-black-16px border-1px-mercury">
              
              
                                       
                <div class="frame-1">
                  <div class="monday">Monday</div>
                  <div class="text">: <?php echo $row_sch['mon_start']; ?> - <?php echo $row_sch['mon_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="tuesday">Tuesday</div>
                  <div class="text">: <?php echo $row_sch['tue_start']; ?> - <?php echo $row_sch['tue_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="wednesday">Wednesday</div>
                  <div class="text">: <?php echo $row_sch['wed_start']; ?> - <?php echo $row_sch['wed_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Thursday</div>
                  <div class="text">: <?php echo $row_sch['thurs_start']; ?> - <?php echo $row_sch['thurs_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Friday</div>
                  <div class="text">: <?php echo $row_sch['fri_start']; ?> - <?php echo $row_sch['fri_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Saturday</div>
                  <div class="text">: <?php echo $row_sch['sat_start']; ?> - <?php echo $row_sch['sat_end']; ?></div>
                </div>
                <div class="frame-1">
                  <div class="friday">Sunday</div>
                  <div class="text">: <?php echo $row_sch['sun_start']; ?> - <?php echo $row_sch['sun_end']; ?></div>
                </div>
              </div>
            
            
