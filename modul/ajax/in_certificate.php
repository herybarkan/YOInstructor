<?php 
ob_start();
session_start();

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
$_file_ = $HTTP_POST_FILES['cimages'];
if(is_uploaded_file($_file_['tmp_name']) && $HTTP_POST_FILES['cimages']['error'] == 0){
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
		if ($_name_ !="") {$_xfoto="CER-".$_SESSION['yo_kd_user'].".".$_ext_;}
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
elseif ($_xfoto =="") {$_foto="default_certificate.png";}

$select_stmt_cer=$db->prepare("INSERT INTO instructor_sertifikat (
kd_instructor,
nm_sertifikat,
year,
image,
deskripsi
) VALUES (
'$_SESSION[yo_kd_user]',
'$_POST[nm_certificate]',
'$_POST[cyear]',
'$_foto',
'$_POST[desc_certificate]'
)");	
$select_stmt_cer->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

/*$select_stmt_pr=$db->prepare("SELECT * FROM instructor_price WHERE kd_instructor='$_SESSION[yo_kd_user]' AND checked='1'");	
$select_stmt_pr->execute();
$row_pr=$select_stmt_pr->fetch(PDO::FETCH_ASSOC);
*/
?>

<?php
//echo $_SESSION['yo_kd_user'];
?>

<div class="edgtf-blog-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-bl-simple edgtf-one-columns edgtf-normal-space edgtf-bl-pag-no-pagination" data-type="simple" data-number-of-posts="5" data-number-of-columns="one" data-space-between-items="normal" data-orderby="date" data-order="ASC" data-image-size="thumbnail" data-title-tag="h6" data-excerpt-length="10" data-pagination-type="no-pagination" data-max-num-pages="3" data-next-page="2">
                                          <div class="edgtf-bl-wrapper edgtf-outer-space">
                                             <ul class="edgtf-blog-list">
                                                <?php
                                             $select_stmt_ser=$db->prepare("SELECT * FROM instructor_sertifikat WHERE  kd_instructor='$_SESSION[yo_kd_user]' AND aktif='1'");	//sql select query
                                             $select_stmt_ser->execute();
                                             while($row_ser=$select_stmt_ser->fetch(PDO::FETCH_ASSOC))
                                             {
                                             ?>
                                                <li class="edgtf-bl-item edgtf-item-space clearfix">
                                                   <div class="edgtf-bli-inner">
                                                      <div class="edgtf-post-image">
                                                         <a itemprop="url" href="#" title="Certificate">
                                                         <img width="150" height="150" src="foto/assets/<?php echo $row_ser['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="a" loading="lazy" > </a>
                                                      </div>
                                                      <div class="edgtf-bli-content">
                                                         <h6 itemprop="name" class="entry-title edgtf-post-title">
                                                            <a itemprop="url" href="https://urbango.qodeinteractive.com/warm-places/" title="Warm Places">
                                                            <?php echo $row_ser['nm_sertifikat']; ?></a>
                                                         </h6>
                                                         <div class="edgtf-post-info-author">
                                                            <span class="edgtf-post-info-author-text">
                                                           Year  </span>
                                                            <a itemprop="author" class="edgtf-post-info-author-link" href="#">
                                                            <?php echo $row_ser['year']; ?>  </a>
                                                         </div>
                                                         <?php if ($row_ser['verified']=="1") { ?>
                                                         <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#0C3;"></i> Verified
                                                         <?php } elseif ($row_ser['verified']=="0") { ?>
                                                         <i class="edgtf-ls-combined-icon far fa-check-square" style="color:#F00;"></i> Not Verified
                                                         <?php } ?>
                                                      </div>
                                                   </div>
                                                </li>
                                                <?php } ?>
                                                
                                                
                                             </ul>
                                          </div>
                                          </div>