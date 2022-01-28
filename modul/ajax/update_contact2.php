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
country='$_POST[country2]', 
state='$_POST[state2]', 
city='$_POST[city2]', 
street_name='$_POST[street_name2]', 
street_number='$_POST[street_number2]', 
zip_code='$_POST[zip_code2]', 
phone_number='$_POST[phone2]' 
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
   
   $select_stmt=$db->prepare("SELECT
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
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_stmt->execute();
   $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
?>



<div class="text-18 opensans-normal-black-13px">
<?php echo $row['propinsi']; ?>, <?php echo $row['kota']; ?> <?php echo $row['negara']; ?>
</div>
                
<div class="text-19 opensans-normal-black-13px">
                <a href="tel:<?php echo $row['phone_number']; ?>"><span style="color:#03F;"><?php echo $row['phone_number']; ?></span>
                </a><br>
                <a href="mailto:<?php echo $row['email']; ?>"><span style="color:#03F;"><?php echo $row['email']; ?></span></a>
               
                  <!--<a href="mailto:<?php //echo $row['email']; ?>"><?php //echo $row['email']; ?>
<div ng-attr-style="{{style.btn.value}};{{style.text1.value}};" ng-class="(ctrl.loader.on ? 'running ld ld-' + ctrl.loader.type : '')" class="ng-binding" style="backface-visibility:hidden;position:relative;cursor:pointer;display:inline-block;white-space:nowrap;background:#ffe66c;border-radius:500px;border:0px solid #444;border-width:0px 0px 0px 0px;padding:10px 15px 10px 43px;color:#140001;font-size:16px;font-family:Helvetica Neue;font-weight:900;font-style:normal;">Click to Emaill : <?php //echo $row['email']; ?><i class="fa ng-scope fa-arrow-right" ng-attr-style="{{style.icon.value}}" ng-class="'fa-' + ctrl.icon.class" ng-if="ctrl.icon.align=='Right' &amp;&amp; ctrl.icon.class" style="color:#090100;font-size:1em;background:#fff;border-radius:500px;border:0px solid transparent;border-width:0px 0px 0px 0px;padding:8px 8px 8px 8px;margin:6px 6px 6px 6px;position:absolute;top:0px;left:0px"></i><div ng-attr-style="{{style.text2.value}}" class="ng-binding" style="color:#999;font-size:10px;font-family:Helvetica Neue;font-weight:initial;font-style:normal;text-align:center;margin:0px 0px 0px 0px"></div></div>  
                </a>-->
                </div>