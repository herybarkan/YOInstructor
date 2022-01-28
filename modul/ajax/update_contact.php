<?php 
ob_start();
session_start();

require_once('../../Connections/con.php'); ?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<?php
//echo var_export($_POST);
$select_stmt=$db->prepare("UPDATE instructor SET 
country='$_POST[country]', 
state='$_POST[state]', 
city='$_POST[city]', 
street_name='$_POST[street_name]', 
street_number='$_POST[street_number]', 
zip_code='$_POST[zip_code]', 
phone_number='$_POST[phone]' 
WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt->execute();
//===========================================================================================

$select_stmt_inst=$db->prepare("SELECT
instructor.id_,
instructor.kd_instructor,
instructor.first_name,
instructor.last_name,
instructor.country,
instructor.state,
instructor.city,
instructor.street_name,
instructor.street_number,
instructor.zip_code,
instructor.phone_number,
instructor.photo,
instructor.typec,
instructor.tgl_in,
instructor.jam_in,
instructor.aktif,
user_.username,
countries.`name` AS nm_country,
states.`name` AS nm_states,
cities.`name` AS nm_city
FROM
user_
JOIN instructor
ON user_.kd_user = instructor.kd_instructor 
JOIN countries
ON countries.id = instructor.country 
JOIN states
ON states.id = instructor.state 
JOIN cities
ON cities.id = instructor.city
   WHERE instructor.kd_instructor='$_SESSION[yo_kd_user]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);

//========================================================================================= 
$select_stmt_cek=$db->prepare("SELECT * FROM content_search WHERE kd_instructor='$_SESSION[yo_kd_user]'");	
$select_stmt_cek->execute();
$row_cek=$select_stmt_cek->fetch(PDO::FETCH_ASSOC);

if ($row_cek['id_']!="") 
{
$select_stmt8=$db->prepare("UPDATE content_search SET
address='$row_inst[nm_country] $row_inst[nm_states] $row_inst[nm_city] $row_inst[street_name] $row_inst[street_number] $row_inst[zip_code] $row_inst[phone_number] $row_inst[username]'
WHERE kd_instructor='$_SESSION[yo_kd_user]'
");	//sql select query
$select_stmt8->execute();
}
elseif ($row_cek['id_']=="") 
{
$select_stmt8=$db->prepare("INSERT INTO content_search (kd_instructor, address) VALUES ('$_SESSION[yo_kd_user]','$row_inst[nm_country] $row_inst[nm_states] $row_inst[nm_city] $row_inst[street_name] $row_inst[street_number] $row_inst[zip_code] $row_inst[phone_number] $row_inst[username]')");	//sql select query
$select_stmt8->execute();
}

//===========================================================================================

$select_stmt_inst=$db->prepare("SELECT
   user_.username AS email,
   instructor.*,
   countries.`name` AS negara,
   states.`name` AS propinsi,
   cities.`name` AS kota
   FROM
   instructor
   JOIN user_
   ON instructor.kd_instructor = user_.kd_user 
   JOIN countries
   ON countries.id = instructor.country 
   JOIN states
   ON states.id = instructor.state 
   JOIN cities
   ON cities.id = instructor.city
   WHERE instructor.kd_instructor='$_SESSION[yo_kd_user]'
   GROUP BY instructor.kd_instructor
   ");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);
?>

                                       
                                       <!--<p style="margin-top:-20px; padding-left:15px;">
                                         
                                          <span><?php //echo $row_inst['propinsi']; ?></span> 
                                          <span><?php //echo $row_inst['kota']; ?></span> 
                                          <span><?php //echo $row['zip_code']; ?> <?php //echo $row_inst['negara']; ?></span><br>
                                          <span><?php //echo $row_inst['phone_number']; ?></span><br />
                                          <span><?php //echo $row_inst['email']; ?></span>
                                          
                                       </p>-->
                                       
                                       <div class="group-32 opensans-normal-black-16px" style="margin-top:20px;">

               <div class="text-53"><?php echo $row_inst['propinsi']; ?>, <?php echo $row_inst['kota']; ?> <?php echo $row_inst['negara']; ?></div>
               <div class="text-54"><a href="tel:<?php echo $row_inst['phone_number']; ?>"><span style="color:#03F;"><?php echo $row_inst['phone_number']; ?></span>
                </a><br>
                <a href="mailto:<?php echo $row_inst['email']; ?>"><span style="color:#03F;"><?php echo $row_inst['email']; ?></span></a>
               </div>
            </div>
