<?php require_once('../../Connections/con.php'); ?>
<?php
//if ($_GET['com']=="setting_jadwal") {$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";}
//$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";
?>



<!--<div class="wpb_wrapper">-->
<div class="edgtf-author-list-holder edgtf-grid-list edgtf-disable-bottom-space edgtf-one-columns edgtf-normal-space">
<div class="edgtf-al-inner edgtf-outer-space clearfix">
<?php
									$select_stmt=$db->prepare("SELECT
content_search.kd_instructor,
content_search.nm_instructor,
content_search.address,
content_search.bio,
content_search.price,
content_search.category,
content_search.sub_category,
content_search.who_train,
content_search.where_train,
instructor.photo,
instructor.aktif
FROM
instructor
JOIN content_search
ON instructor.kd_instructor = content_search.kd_instructor 
WHERE 
(
content_search.nm_instructor LIKE '%$_GET[get_src]%' OR
content_search.address LIKE '%$_GET[get_src]%' OR
content_search.bio LIKE '%$_GET[get_src]%' OR
content_search.price LIKE '%$_GET[get_src]%' OR
content_search.category LIKE '%$_GET[get_src]%' OR
content_search.sub_category LIKE '%$_GET[get_src]%' OR
content_search.who_train LIKE '%$_GET[get_src]%' OR
content_search.where_train LIKE '%$_GET[get_src]%'
)
AND instructor.aktif='1' LIMIT 5");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
<a itemprop="url" href="?com=bprofile&kd_inst=<?php echo $row['kd_instructor']; ?>">
<article class="edgtf-al-item edgtf-item-space" style="width:100%;">
	<div class="edgtf-al-item-inner"  style="background-color:#F1F1F1; border-radius:10px; padding:15px;">
		<div class="edgtf-al-image">
			
            <img width="150" height="150" src="foto/user/<?php echo $row['photo']; ?>" class="attachment-thumbnail size-thumbnail" alt="a" loading="lazy" style="border-radius:10px;">
            
		</div>
		<div class="edgtf-al-content">
			<h4 itemprop="name" class="edgtf-al-title entry-title">
				<?php echo $row['nm_instructor']; ?>
					</h4> <span class="edgtf-al-job-title">
                    <?php echo $row['price']; ?>
                    </span>
						<p itemprop="description" class="edgtf-al-excerpt"><?php echo $row['sub_category']; ?>
                        </p>
		</div>
	</div>
</article>
</a>

<?php
									}
									?>
</div>
</div>
<!--</div>-->