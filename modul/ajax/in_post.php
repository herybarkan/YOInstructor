<?php 
ob_start();
session_start();

$tgl_in=date('Y-m-d');
$jam_in=date('H:i:s');

require_once('../../Connections/con.php'); ?>
<?php
//===========================================================================================
if (phpversion() > "4.0.6") {
	$HTTP_POST_FILES = &$_FILES;
}
define("MAX_SIZE",900000000000);
define("DESTINATION_FOLDER", "../../foto/assets/");
//define("no_error", "../index.php?com=upload&id_=".$_POST['hf_id']."&upload=success");
//define("yes_error", "../index.php?com=upload&id_=".$_POST['hf_id']."&upload=error");
$_accepted_extensions_ = "jpg, jpeg, png, gif";
if(strlen($_accepted_extensions_) > 0){
	$_accepted_extensions_ = @explode(",",$_accepted_extensions_);
} else {
	$_accepted_extensions_ = array();
}
$_file_ = $HTTP_POST_FILES['pimages'];
if(is_uploaded_file($_file_['tmp_name']) && $HTTP_POST_FILES['pimages']['error'] == 0){
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
		if ($_name_ !="") {$_xfoto="POST-".$_SESSION['yo_kd_user'].$jam_in.".".$_ext_;}
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


	if ($_xfoto !="") {$_foto="$_xfoto";}
elseif ($_xfoto =="") {$_foto="default_post.png";}

$select_stmt_cer=$db->prepare("INSERT INTO instructor_post (
kd_instructor,
title,
image,
deskripsi,
tgl_in,
jam_in
) VALUES (
'$_SESSION[yo_kd_user]',
'$_POST[nm_title]',
'$_foto',
'$_POST[desc_post]',
'$tgl_in',
'$jam_in'
)");	
$select_stmt_cer->execute();

?>




                                                <?php
                                             $select_stmt_post=$db->prepare("SELECT * FROM instructor_post WHERE  kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1'");	//sql select query
                                             $select_stmt_post->execute();
                                             while($row_post=$select_stmt_post->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
       <div class="edgtf-ig-image edgtf-item-space">
            <div class="edgtf-ig-image-inner">
               <img width="800" height="552" src="foto/assets/<?php echo $row_post['image']; ?>" class="attachment-full size-full" alt="a" loading="lazy" sizes="(max-width: 800px) 100vw, 800px"> 
            </div>
         </div>
                                                <?php } ?>
