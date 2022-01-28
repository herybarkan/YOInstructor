<?php require_once('../../Connections/con.php'); ?>
<?php
//if ($_GET['com']=="setting_jadwal") {$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";}
//$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";
?>

<select name="city2" id="city2" required class="form-control" style="width:100%;">
                                          <option value="">Select</option>
                                          <?php
									$select_stmt=$db->prepare("SELECT * FROM cities WHERE state_id='$_GET[get_city2]'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        
                                    <?php
									}
									?>
                                      </select>