<?php 
ob_start();
session_start();

require_once('../../Connections/con.php');

date_default_timezone_set('Asia/Jakarta');

$tglin=date('Y-m-d');
$jamin=date('H:i:s');


srand ((double) microtime() * 10000000);
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
$awal="ORD";

$kd_order = $awal.$kode.$zxtahun.$zxbulan.$zxtanggal.$zxjam.$zxmenit.$zxdetik;

 ?>
<?php
$select_stmt=$db->prepare("INSERT INTO payments_upgrade (
product_id,
kd_instructor,
payment_amount,
currency_code,
product_name,
createdtime,
nm_account,
bank,
no_rek,
tgl_trf,
notes
) VALUES (
'$kd_order',
'$_POST[hf_kd_inst]',
'$_POST[amount]',
'USD',
'$_POST[item_name]',
'$tglin $jamin',
'$_POST[account_name]',
'$_POST[bank]',
'$_POST[account_number]',
'$_POST[date_trf]',
'$_POST[notes]'
)");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

header("Location:../../index.php?com=konf_payment_upgrade2&pid=".$kd_order."");
?>

