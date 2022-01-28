<?php
   ob_start();
   session_start();
   
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
   user_.username
   FROM
   user_
   JOIN instructor
   ON user_.kd_user = instructor.kd_instructor 
   WHERE kd_instructor='$row[kd_instructor]'");
   $select_stmt_inst->execute();
   $row_inst=$select_stmt_inst->fetch(PDO::FETCH_ASSOC);
   ?>
<style>
   .xlabelz {
   font-family: 'Roboto', sans-serif;
   font-size: 12px;
   font-weight: 600;
   /*letter-spacing: 0.025rem;*/
   font-style: normal;
   text-transform: uppercase;
   color: #ffffff;
   background-color: #fddf21;
   border-radius: 1.25rem;
   -webkit-border-radius: 1.25rem;
   -moz-border-radius: 1.25rem;
   padding: 0.35rem 0.75rem;
   border-style: solid;
   border-width: 0.125rem;
   border-color: #f0c93d;
   -webkit-box-shadow: none;
   -moz-box-shadow: none;
   -box-shadow: none;
   width:300px;
   }
   .xlabel {
	box-shadow: 0px 1px 0px 0px #fddf21;
	background:linear-gradient(to bottom, #fddf21 5%, #fddf21 100%);
	background-color:#fddf21;
	border-radius:14px;
	display:inline-block;
	cursor:pointer;
	color:#fff;
	font-family:Roboto;
	font-size:14px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	
}
</style>
<script type="text/javascript" src="js/ajax_states.js"></script>
<script type="text/javascript" src="js/ajax_city.js"></script>
<!--<div class="vc_empty_space" style="height: 42px"><span class="vc_empty_space_inner"></span></div>-->

<script>
   //jQuery(document).ready(function ($) {
	

   function submit_contact() {
   var form = document.fcontact;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_contact.php',
       data: dataString,
       success: function(data){
        jQuery('#result_contact').html(data);
   		jQuery('#dcontact').hide();
   		jQuery('#dt_contact').show();
   
   
       }
   });
   return false;
   }
//====================================================================   
   function submit_type() {
   var form = document.ftype;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_type.php',
       data: dataString,
       success: function(data){
        jQuery('#result_type').html(data);
   		jQuery('#dtype').hide();
   		jQuery('#dt_type').show();
   
   
       }
   });
   return false;
   }
   //====================================================================
   function submit_add_before() {
   var form = document.fba;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_before.php',
       data: dataString,
       success: function(data){
        jQuery('#result_ba').html(data);
   		jQuery('#d_ba').hide();
   		jQuery('#dt_ba').hide();
   
   
       }
   });
   return false;
   }
   
   //====================================================================
   function submit_add_after() {
   var form = document.fba2;
   
   var dataString = jQuery(form).serialize();
   
   
   jQuery.ajax({
       type:'POST',
       url:'modul/ajax/update_after2.php',
       data: dataString,
       success: function(data){
        jQuery('#result_ba').html(data);
   		jQuery('#d_ba').hide();
   		jQuery('#dt_ba').hide();
   
   
       }
   });
   return false;
   }
   //====================================================================
   function submit_certificate() {
   event.preventDefault();
            var formx = $('#fcertificate')[0];
            var data = new FormData(formx);

            data.append("CustomField", "This is some extra data, testing");


            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "modul/ajax/in_certificate.php",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function(data)
			  	{
        			jQuery('#result_certificate').html(data);
   					$('#dcertificate').show();
					$('#dt_certificate').hide();
   
   
       			}

            });
   }
   
 
	
  
</script>