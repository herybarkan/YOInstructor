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

$username = mysql_real_escape_string($_POST['email']);
$passwd = md5(mysql_real_escape_string($_POST['password']));
*/

$first_name = addslashes($_POST['first_name']);
$last_name = addslashes($_POST['last_name']);
$country = addslashes($_POST['country']);
$state = addslashes($_POST['state']);
$city = addslashes($_POST['city']);
$street_name = addslashes($_POST['street_name']);
$street_number = addslashes($_POST['street_number']);
$zip_code = addslashes($_POST['zip_code']);
$phone_number = addslashes($_POST['phone_number']);

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
$awal="MEM";

$kd_member = $awal.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;*/

//===========================================================================================
/*if (phpversion() > "4.0.6") {
	$HTTP_POST_FILES = &$_FILES;
}
define("MAX_SIZE",900000000000);
define("DESTINATION_FOLDER", "../../foto/user/");
//define("no_error", "../index.php?com=upload&id_=".$_POST['hf_id']."&upload=success");
//define("yes_error", "../index.php?com=upload&id_=".$_POST['hf_id']."&upload=error");
$_accepted_extensions_ = "jpg, jpeg, png, gif";
if(strlen($_accepted_extensions_) > 0){
	$_accepted_extensions_ = @explode(",",$_accepted_extensions_);
} else {
	$_accepted_extensions_ = array();
}
$_file_ = $HTTP_POST_FILES['file_foto2'];
if(is_uploaded_file($_file_['tmp_name']) && $HTTP_POST_FILES['file_foto2']['error'] == 0){
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
		if ($_name_ !="") {$_xfoto=$kd_member.".".$_ext_;}
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

$select_stmt=$db->prepare("INSERT INTO member (
kd_member,
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
'4', 
'1'
)");	//sql select query
$select_stmt2->execute();
//===========================================================================================
//===========================================================================================
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
	$select_stmt3=$db->prepare("INSERT INTO type_class_sub_member (
		type_class,
		kd_member,
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

$select_stmt_catx=$db->prepare("SELECT * FROM type_class_sub_member WHERE kd_member='$_SESSION[kdxx]' GROUP BY type_class");
                                             $select_stmt_catx->execute();
                                             while($row_catx=$select_stmt_catx->fetch(PDO::FETCH_ASSOC))
                                             {
												$select_stmt_catxx=$db->prepare("SELECT category.nm_category, category_sub.nm_sub_category, category.id_ FROM category_sub JOIN category
ON category_sub.id_category = category.id_ WHERE nm_sub_category='$row_catx[sub_class_name]'");
                                             $select_stmt_catxx->execute();
											 $row_catxx=$select_stmt_catxx->fetch(PDO::FETCH_ASSOC);
												
												$select_stmt5=$db->prepare("INSERT INTO type_class_member (
												kd_member,
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
//echo "class: ".$xx_class."";

//========================================================================================= 
 $select_mem=$db->prepare("SELECT
member.kd_member,
member.first_name,
member.last_name,
countries.`name` AS nm_negara,
states.`name` AS nm_state,
cities.`name` AS nm_city,
member.aktif,
member.phone_number,
user_.username
FROM
countries
JOIN member
ON countries.id = member.country 
JOIN states
ON states.id = member.state 
JOIN cities
ON cities.id = member.city 
JOIN user_
ON user_.kd_user = member.kd_member
   WHERE member.kd_member='$_SESSION[kdxx]'
   GROUP BY member.kd_member"); //sql select query
   $select_mem->execute();
   $row_mem=$select_mem->fetch(PDO::FETCH_ASSOC);

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

$mailz->setFrom('system@yoinstructor.com', 'Member Registration');
$mailz->addReplyTo('system@yoinstructor.com', 'Member Registration');

// Menambahkan penerima
$mailz->addAddress($email);
//$mail->addAddress('tambahlong@gmail.com');

// Subjek email
$mailz->Subject = 'Member Registration';

// Mengatur format email ke HTML
$mailz->isHTML(true);

         $mailContent = '<table width="90%" border="0" align="center">
  <tr>
    <td colspan="2"><img src="https://yoinstructor.com/images/logo.png" width="300" height="71" />
    <span>
    <center>
    <h2>Member Registration</h2>
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
    <td>'.$row_mem['first_name'].' '.$row_mem['last_name'].'</td>
  </tr>
  <tr>
    <td>Location</td>
    <td>'.$row_mem['nm_negara'].','.$row_mem['nm_state'].','.$row_mem['nm_city'].'</td>
  </tr>
  <tr>
    <td>Contact</td>
    <td>'.$row_mem['username'].', '.$row_mem['phone_number'].'</td>
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