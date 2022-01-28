<?php require_once('../../Connections/con.php'); ?>

<?php
//echo "Show Schedule";
//echo "<br>";
//echo $_GET['get_sched'];
$tgl=$_GET['get_sched'];
$date=date_create($tgl);
//echo "<br>";
//echo date_format($date,"Y/m/d l");

$xtgl=date_format($date,"Y-m-d");
$nm_hari=date_format($date,"l");

	if ($_GET['get_mem']=="") 
		{ ?>
			<h4><span style=" font-size:23px; font-family: 'Roboto-thin', sans-serif; color:#000; font-weight: lighter;">
                        You haven't logged in As Member<br><br>
                  		Please login first. or If you are not 
                  		registered yet, please register.
                        </span></h4>
                        
                        <a href="index.php?com=login"><span class="btn" style="background-color:#FFE45F;">Login</span>
</a>

<a href="index.php?com=registration&type=member"><span class="btn" style="background-color:#FFE45F;">Join Member</span>
</a>
			
		<?php }
elseif ($_GET['get_mem']!="") {
echo date_format($date,"Y/m/d l");
?>

<table>
<?php
$select_stmt=$db->prepare("SELECT * FROM instructor_sched WHERE hari='$nm_hari' AND kd_instructor='$_GET[get_kd_inst]'");	//sql select query
$select_stmt->execute();
while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
<tr height="40" valign="middle"> 
<td>                                   
                                     <?php echo $row['jam_start']; ?> - <?php echo $row['jam_end']; ?>
</td>
<td> 
<!--<a href="modul/booking/in_booking.php?kd_inst=<?php //echo $_GET['get_kd_inst']; ?>&pkg=<?php //echo $_GET['get_pkg']; ?>&curr=<?php //echo $_GET['get_curr']; ?>&prc=<?php //echo $_GET['get_prc']; ?>&tgl=<?php //echo $xtgl; ?>&id_sched=<?php //echo $row['id_']; ?>&kd_sched=<?php //echo $row['kd_sched']; ?>&hari=<?php //echo $nm_hari; ?>&js=<?php //echo $row['jam_start']; ?>&je=<?php //echo $row['jam_end']; ?>"><span class="btn" style="background-color:#FFE45F;">Select</span>
</a>-->

<a href="?com=porder&kd_inst=<?php echo $_GET['get_kd_inst']; ?>&pkg=<?php echo $_GET['get_pkg']; ?>&curr=<?php echo $_GET['get_curr']; ?>&prc=<?php echo $_GET['get_prc']; ?>&tgl=<?php echo $xtgl; ?>&id_sched=<?php echo $row['id_']; ?>&kd_sched=<?php echo $row['kd_sched']; ?>&hari=<?php echo $nm_hari; ?>&js=<?php echo $row['jam_start']; ?>&je=<?php echo $row['jam_end']; ?>"><span class="btn" style="background-color:#FFE45F;">Select</span>
</a>
</td>
</tr>                                        
                                    <?php
									}
									?>
									
</table>
<?php } ?>