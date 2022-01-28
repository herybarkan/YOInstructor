<?php 
ob_start();
session_start();

require_once('../../Connections/con.php');

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
$select_stmt=$db->prepare("INSERT INTO order_inst (
kd_order,
kd_schedule,
kd_instructor,
kd_member,
id_schedule,
tgl,
hari,
jam_start,
jam_end,
currency,
price,
package
) VALUES (
'$kd_order',
'$_GET[kd_sched]',
'$_GET[kd_inst]',
'$_SESSION[yo_kd_user]',
'$_GET[id_sched]',
'$_GET[tgl]',
'$_GET[hari]',
'$_GET[js]',
'$_GET[je]',
'$_GET[curr]',
'$_GET[prc]',
'$_GET[pkg]'
)");	
$select_stmt->execute();
//$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

header("Location:../../index.php?com=konf_booking");
?>

