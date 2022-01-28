<?php
ob_start();
session_start();

require_once 'Connections/con.php';
?>
<style type="text/css">
@media only screen 
   and (max-width : 1800px) 
   and (max-height : 2880px) {
   
.posisi_top{
	margin-top:120px;
	padding-top:70px;
	}
}

@media only screen 
   and (max-width : 1200px) {
   
.posisi_top{
	margin-top:0px;
	padding-top:30px;
	}
}

@media only screen 
   and (max-width : 320px) {
   /* Styles here */
}
</style>

<div class="edgtf-content-inner posisi_top">

 <center>                 
 <h2 style="padding-top: 0px; padding-bottom: 30px;"> <span class="font_hitam2">Sub</span> <span class="font_kuning2">Categories</span>
 </h2>
</center>
<div style="margin-left:50px; margin-top:-100px; z-index:10000; width:50px;"><a href="#" onclick="history.back()"><img src="img/left.png" width="50" height="50" /></a></div>
 
<div class="edgtf-full-width">
  <div class="edgtf-full-width-inner">
<div class="edgtf-grid-row">
<div class="edgtf-page-content-holder edgtf-grid-col-12">
<div class="edgtf-row-grid-section-wrapper "><div class="edgtf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1538383006740"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="edgtf-author-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-two-columns edgtf-normal-space">
<div class="edgtf-al-inner edgtf-outer-space clearfix">
<?php
									$select_stmt=$db->prepare("SELECT * FROM category_sub WHERE id_category ='$_GET[id_]' AND aktif='1' ORDER BY id_ DESC");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
<article class="edgtf-al-item edgtf-item-space">
	<div class="edgtf-al-item-inner">
		<div class="edgtf-al-image">
			<a itemprop="url" href="?com=listing&subc=<?php echo $row['nm_sub_category']; ?>&id_=<?php echo $row['id_']; ?>">
            <img width="150" height="150" src="foto/assets/<?php echo $row['image']; ?>" class="attachment-thumbnail size-thumbnail" alt="a" loading="lazy">
            </a>
		</div>
		<div class="edgtf-al-content">
			<h4 itemprop="name" class="edgtf-al-title entry-title">
				<a itemprop="url" href="?com=listing&subc=<?php echo $row['nm_sub_category']; ?>&id_=<?php echo $row['id_']; ?>"><?php echo $row['nm_sub_category']; ?></a>
					</h4> <span class="edgtf-al-job-title" style="color:#666;">
                    <?php
					$select_cinst=$db->prepare("SELECT
COUNT(instructor.id_) AS jml_inst
FROM
instructor
JOIN type_class_sub
ON instructor.kd_instructor = type_class_sub.kd_instructor 
JOIN countries
ON countries.id = instructor.country 
JOIN states
ON states.id = instructor.state 
JOIN cities
ON cities.id = instructor.city
WHERE type_class_sub.sub_class_name='$row[nm_sub_category]' AND instructor.aktif='1'
");	//sql select query
					$select_cinst->execute();
					$row_cinst=$select_cinst->fetch(PDO::FETCH_ASSOC);
					?>
                    <?php echo $row_cinst['jml_inst']; ?> Instructor</span>
						<p itemprop="description" class="edgtf-al-excerpt"><!--Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipi-->
                        </p>
		</div>
	</div>
</article>
<?php } ?>



</div>
</div></div></div></div></div></div></div>
</div>
</div>
</div>
</div>

</div>