<?php require_once('../../Connections/con.php'); ?>
<?php
//if ($_GET['com']=="setting_jadwal") {$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";}
//$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";
?>

<label class="control-label">State</label>
<select name="state" id="state" required class="form-control default-select" onchange="show_city(document.getElementById('state').value);" style="width:100%;">
                                          <option value="">Choose...</option>
                                          <?php
									$select_stmt=$db->prepare("SELECT * FROM states WHERE country_id='$_GET[get_states]'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        
                                    <?php
									}
									?>
                                      </select>