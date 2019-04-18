<?php
include("../model/model-status.php");

$id = $_GET["id"];
$data = new model();
if($hasil = $data->HapusData($id)){
	echo 'Data Berhasil Dihapus';
}
else{
	echo 'Data tidak dapat dihapus';
}

?>