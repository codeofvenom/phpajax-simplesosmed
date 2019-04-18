<?php
include("../model/model-status.php");

$data = new model();
$hasil = $data->loadData();
while($row = $hasil->fetch_array()){
	echo $row['id_status'];
	echo "|";
	echo $row['owner'];
	echo "|";
	echo $row['content'];
	echo "|";
	echo $row['timestamp'];
	echo "@";
}
?>