<?php
//require_once '../Connections/con.php';
//fetch.php;

if(isset($_GET["term"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=yoi_db", "root", "");

 $query = "
 SELECT * FROM instructor 
 WHERE first_name LIKE '%".$_GET["term"]."%' 
 ORDER BY first_name ASC
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = $statement->rowCount();

 $output = array();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $temp_array = array();
   $temp_array['value'] = $row['first_name'];
   $temp_array['label'] = '<img src="../foto/user/'.$row['photo'].'" width="70" />&nbsp;&nbsp;&nbsp;'.$row['first_name'].'';
   $output[] = $temp_array;
  }
 }
 else
 {
  $output['value'] = '';
  $output['label'] = 'No Record Found';
 }

 echo json_encode($output);
}

?>