<?php require_once('../../Connections/con.php'); ?>
<?php
//if ($_GET['com']=="setting_jadwal") {$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";}
//$aksi="onchange=\"show_dokter(document.getElementById('sklinik').value);\"";
?>

<select name="state2" id="state2" required class="form-control" onchange="show_city2(document.getElementById('state2').value);" style="width:100%;">
                                          <option value="">pilih</option>
                                          <?php
									$select_stmt=$db->prepare("SELECT * FROM states WHERE country_id='$_GET[get_states2]'");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        
                                    <?php
									}
									?>
                                      </select>