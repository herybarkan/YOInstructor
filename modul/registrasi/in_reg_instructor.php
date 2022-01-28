<?php require_once('../../Connections/con.php'); ?>
<?php
ob_start();
session_start();

date_default_timezone_set('Asia/Jakarta');

require '../phpmailler/PHPMailerAutoload.php';
require '../phpmailler/class.phpmailer.php';
require '../phpmailler/class.phpmaileroauth.php';


$tgl_in=date('Y-m-d');
$jam_in=date('H:i:s');

/*$first_name = mysql_real_escape_string($_POST['first_name']);
$last_name = mysql_real_escape_string($_POST['last_name']);
$country = mysql_real_escape_string($_POST['country']);
$state = mysql_real_escape_string($_POST['state']);
$city = mysql_real_escape_string($_POST['city']);
$street_name = mysql_real_escape_string($_POST['street_name']);
$street_number = mysql_real_escape_string($_POST['street_number']);
$zip_code = mysql_real_escape_string($_POST['zip_code']);
$phone_number = mysql_real_escape_string($_POST['phone_number']);
$who_train = mysql_real_escape_string($_POST['ctrain']);

$username = mysql_real_escape_string($_POST['email']);
$passwd = md5(mysql_real_escape_string($_POST['password']));*/
//echo $_SESSION[kdxx];

$first_name = addslashes($_POST['first_name']);
$last_name = addslashes($_POST['last_name']);
$country = addslashes($_POST['country']);
$state = addslashes($_POST['state']);
$city = addslashes($_POST['city']);
$street_name = addslashes($_POST['street_name']);
$street_number = addslashes($_POST['street_number']);
$zip_code = addslashes($_POST['zip_code']);
$phone_number = addslashes($_POST['phone_number']);
//$who_train = addslashes($_POST['ctrain']);

$username = addslashes($_POST['email']);
$passwd = md5($_POST['password']);

/*srand ((double) microtime() * 10000000);
$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
"R","S","T","U","V","W","X","Y","Z");
$rand_index = array_rand($input,8);
$kode= $input[$rand_index[3]].$input[$rand_index[5]].$input[$rand_index[4]].$input[$rand_index[2]].$input[$rand_index[1]];

$zxtahun=date('y');
$zxbulan=date('m');
$zxtanggal=date('d');
$zxjam=date('H');
$zxmenit=date('i');
$zxdetik=date('s');
$awal="INS";

$kd_inst = $awal.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;*/

//===========================================================================================
/*if (phpversion() > "4.0.6") {
	$HTTP_POST_FILES = &$_FILES;
}
define("MAX_SIZE",900000000000);
define("DESTINATION_FOLDER", "../../foto/user/");
$_accepted_extensions_ = "jpg, jpeg, png, gif";
if(strlen($_accepted_extensions_) > 0){
	$_accepted_extensions_ = @explode(",",$_accepted_extensions_);
} else {
	$_accepted_extensions_ = array();
}
$_file_ = $HTTP_POST_FILES['file_foto'];
if(is_uploaded_file($_file_['tmp_name']) && $HTTP_POST_FILES['file_foto']['error'] == 0){
	$errStr = "";
	$_name_ = $_file_['name'];
	$_type_ = $_file_['type'];
	$_tmp_name_ = $_file_['tmp_name'];
	$_size_ = $_file_['size'];
	if($_size_ > MAX_SIZE && MAX_SIZE > 0){
		$errStr = "File troppo pesante";
	}
	$_ext_ = explode(".", $_name_);
	$_ext_ = strtolower($_ext_[count($_ext_)-1]);
	if(!in_array($_ext_, $_accepted_extensions_) && count($_accepted_extensions_) > 0){
		$errStr = "Estensione non valida";
	}
	if(!is_dir(DESTINATION_FOLDER) && is_writeable(DESTINATION_FOLDER)){
		$errStr = "Cartella di destinazione non valida";
	}
		
		if ($_name_ !="") {$_xfoto=$kd_inst.".".$_ext_;}
	elseif ($_name_ =="") {$_xfoto="";}
		
		if(@copy($_tmp_name_,DESTINATION_FOLDER . "/" . $_xfoto))
			{
				$sts_upload="success";
			} 
		else 
			{
				$sts_upload="fail";
			}
}


	if ($_xfoto !="") {$_foto="'$_xfoto',";}
elseif ($_xfoto =="") {$_foto="'default_user.png',";}*/

$_foto=$_SESSION['kdxx'].".png";
//===========================================================================================
/*$cb_type = isset($_POST['cb_type']) ? $_POST['cb_type'] : array();
foreach($cb_type as $value) {
    // here you can use $value
	echo $value."<br>";
	$dtype[]= $value;
	//===========================
	$select_stmt3=$db->prepare("INSERT INTO type_class (
		kd_instructor,
		type 
		) VALUES (
		'$_SESSION[kdxx]',
		'$value'
		)");	
	$select_stmt3->execute();
	//===============================
}*/

$cb_type = isset($_POST['cb_type']) ? $_POST['cb_type'] : array();
foreach($cb_type as $value) {
    // here you can use $value
	echo $value."<br>";
	$dtype[]= $value;
	//===========================
	$select_stmt_subcat=$db->prepare("SELECT * FROM category_sub WHERE nm_sub_category='$value'");
	$select_stmt_subcat->execute();
	$row_subcat=$select_stmt_subcat->fetch(PDO::FETCH_ASSOC);
	//===========================
	$select_stmt3=$db->prepare("INSERT INTO type_class_sub (
		type_class,
		kd_instructor,
		sub_class_name 
		) VALUES (
		'$row_subcat[id_category]',
		'$_SESSION[kdxx]',
		'$value'
		)");	
	$select_stmt3->execute();
	//===============================
	$class_sub[]= $row_subcat['nm_sub_category'];
}

/*$array_dcatsub = implode(",", $value); 
$xdcatsub= $array_dcatsub;
echo "tipe: ".$xdcatsub."<br>";*/

$array_class_sub = implode(",", $class_sub); 
$xx_class_sub= $array_class_sub;
echo "class_sub: ".$xx_class_sub."";


/*$array_dtype = implode(",", $dtype); 
$xdtype= $array_dtype;
echo "tipe: ".$xdtype."<br>";*/
//===========================================================================================
$cb_train = isset($_POST['cb_train']) ? $_POST['cb_train'] : array();
foreach($cb_train as $valuext) {
    // here you can use $value
	echo $valuext."<br>";
	$dtrain[]= $valuext;
	//===========================
	$select_stmt4=$db->prepare("INSERT INTO who_train (
		kd_instructor,
		wtrain 
		) VALUES (
		'$_SESSION[kdxx]',
		'$valuext'
		)");	
	$select_stmt4->execute();
	//===============================
}
$array_dwtrain = implode(",", $dtrain); 
$xdwtrain= $array_dwtrain;
echo "tipe: ".$xdwtrain."<br>";

//===========================================================================================
$cb_work = isset($_POST['cb_work']) ? $_POST['cb_work'] : array();
foreach($cb_work as $valuex) {
    // here you can use $value
	echo $valuex."<br>";
	$dwork[]= $valuex;
	//===========================
	$select_stmt3=$db->prepare("INSERT INTO where_work (
		kd_instructor,
		wwork 
		) VALUES (
		'$_SESSION[kdxx]',
		'$valuex'
		)");	
	$select_stmt3->execute();
	//===============================
}

$array_dwork = implode(",", $dwork); 
$xdwork= $array_dwork;
echo "tipe: ".$xdwork."<br>";

//===========================================================================================

$select_stmt=$db->prepare("INSERT INTO instructor (
kd_instructor,
first_name, 
last_name,
country,
state,  
city, 
street_name, 
street_number,
zip_code,
phone_number,
photo,
who_train,
tgl_in,
jam_in,
aktif
) VALUES (
'$_SESSION[kdxx]',
'$first_name',
'$last_name', 
'$country', 
'$state',
'$city', 
'$street_name',  
'$street_number', 
'$zip_code',
'$phone_number',
'$_foto',
'$who_train',
'$tgl_in',
'$jam_in',
'1'
)");	//sql select query
$select_stmt->execute();


//===========================================================================================
$select_stmt2=$db->prepare("INSERT INTO user_ (
kd_user,
username, 
passwd,
grup,
aktif
) VALUES (
'$_SESSION[kdxx]',
'$username',
'$passwd', 
'3', 
'1'
)");	//sql select query
$select_stmt2->execute();
//===========================================================================================
$select_stmt4=$db->prepare("INSERT INTO instructor_detail (
kd_instructor,
overview
) VALUES (
'$_SESSION[kdxx]',
'About me...please update '
)");	//sql select query
$select_stmt4->execute();
//===========================================================================================
//===========================================================================================
$select_stmt5=$db->prepare("INSERT INTO instructor_schedule (
kd_instructor
) VALUES (
'$_SESSION[kdxx]'
)");	//sql select query
$select_stmt5->execute();
//===========================================================================================
//===========================================================================================
/*$select_stmt6=$db->prepare("INSERT INTO instructor_schedule (
kd_instructor
) VALUES (
'$_SESSION[kdxx]'
)");	//sql select query
$select_stmt6->execute();*/
//===========================================================================================
$select_stmt7=$db->prepare("INSERT INTO instructor_price (
kd_instructor,
currency,
price,
pack,
checked
) VALUES (
'$_SESSION[kdxx]',''$US'','5','Per Hour','1'
)");	//sql select query
$select_stmt7->execute();
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
   WHERE instructor.kd_instructor='$_SESSION[kdxx]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);
   

$select_stmt_catx=$db->prepare("SELECT * FROM type_class_sub WHERE kd_instructor='$_SESSION[kdxx]' GROUP BY type_class");
                                             $select_stmt_catx->execute();
                                             while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
                                             {
												$select_stmt_catxx=$db->prepare("SELECT category.nm_category, category_sub.nm_sub_category, category.id_ FROM category_sub JOIN category
ON category_sub.id_category = category.id_ WHERE nm_sub_category='$row_catx[sub_class_name]'");
                                             $select_stmt_catxx->execute();
											 $row_catxx=$select_stmt_catxx->fetch(PDO::FETCH_ASSOC);
												
												$select_stmt5=$db->prepare("INSERT INTO type_class (
												kd_instructor,
												type 
												) VALUES (
												'$_SESSION[kdxx]',
												'$row_catxx[nm_category]'
												)");	
												$select_stmt5->execute(); 
												
												$class[]= $row_catxx['nm_category'];
											 }
											 
/*$array_dcat = implode(",", $row_catx['nm_category']); 
$xdcat= $array_dcat;
echo "tipe: ".$xdcat."<br>";*/

$array_class = implode(",", $class); 
$xx_class= $array_class;
echo "class: ".$xx_class."";

//=========================================================================================   
$select_stmt8=$db->prepare("INSERT INTO content_search (
kd_instructor,
nm_instructor,
address,
category,
sub_category,
who_train,
where_train
) VALUES (
'$_SESSION[kdxx]',
'$first_name $last_name',
'$row_inst[nm_country] $row_inst[nm_states] $row_inst[nm_city] $street_name $street_number $zip_code $phone_number',
'$xx_class',
'$xx_class_sub',
'$xdwork',
'$xdwtrain'
)");	//sql select query
$select_stmt8->execute();
//===========================================================================================
$pid="ORD".$_SESSION['kdxx'];

$datenow=date('Y-m-d');
						
$time = strtotime($datenow);
$final = date("Y-m-d", strtotime("+1 month", $time));
$drm= date('Y-m-d', strtotime($date. ' + 21 days')); 

$in_pay=$db->prepare("INSERT INTO payments_upgrade (
product_id,
kd_instructor,
payment_amount,
currency_code,
createdtime,
tgl_start,
tgl_end,
tgl_remind
) VALUES (
'$pid',
'$_SESSION[kdxx]',
'0',
'USD',
'$tgl_in $jam_in',
'$datenow',
'$final',
'$drm'
)");	//sql select query
$in_pay->execute();
//===========================================================================================

 $select_cont=$db->prepare("SELECT
   user_.username AS email,
   instructor.*,
   countries.`name` AS nm_negara,
   states.`name` AS nm_state,
   cities.`name` AS nm_city
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
   WHERE instructor.kd_instructor='$_SESSION[kdxx]'
   GROUP BY instructor.kd_instructor"); //sql select query
   $select_cont->execute();
   $row_cont=$select_cont->fetch(PDO::FETCH_ASSOC);

$email = $username;
//$email = "herybarkan@gmail.com";
$to = $email; 
//$subject = "Konfirmasi Aktivasi Akun ". $email;

$mailz = new PHPMailer;

// Konfigurasi SMTP
$mailz->isSMTP();
$mailz->Host = 'mail.yoinstructor.com';
$mailz->SMTPAuth = true;
$mailz->Username = 'system@yoinstructor.com';
$mailz->Password = 'Alhamdulilah2021';
$mailz->SMTPSecure = 'tls';
$mailz->Port = 587;
/*$mailz->smtpConnect(
	    array(
	        "ssl" => array(
	            "verify_peer" => false,
	            "verify_peer_name" => false,
	            "allow_self_signed" => true
	        )
	    )
	);*/

$mailz->setFrom('system@yoinstructor.com', 'Instructor Registration');
$mailz->addReplyTo('system@yoinstructor.com', 'Instructor Registration');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Instructor Registration';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    <span>
    <center>
    <h2>Instructor Registration</h2>
    Registration is Successed. <br>
    Welcome to YO Instructore Platform
    </center>
    </span>
    </td>
  </tr>
  <tr>
    <td width="34%">&nbsp;</td>
    <td width="66%">&nbsp;</td>
  </tr>
  <tr>
    <td> Name</td>
    <td>'.$row_cont['first_name'].' '.$row_cont['last_name'].'</td>
  </tr>
  <tr>
    <td>Location</td>
    <td>'.$row_cont['nm_negara'].','.$row_cont['nm_state'].','.$row_cont['nm_city'].'</td>
  </tr>
  <tr>
    <td>Contact</td>
    <td>'.$row_cont['email'].', '.$row_cont['phone_number'].'</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Thank for Joining</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <a href="https://yoinstructor.com/?com=login">
      <input type="button" name="btn" id="btn" value="LOGIN" style="background-color:#FC6; color:#FFF; border:none; width:120px; border-radius:8px; height:40px;"/>
      </a>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Book wellness instructors Anytime &amp; Anywhere.</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="font-weight: bold">www.yoinstructor.com</td>
  </tr>
</table>';
         
$mailz->Body = $mailContent;


// Kirim email
if(!$mailz->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mailz->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}
//==========================================================================================



header("Location:../../index.php?com=konf_registration");

?>