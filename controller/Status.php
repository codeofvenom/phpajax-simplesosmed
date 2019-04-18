<?php
include("../model/model-status.php");
if(isset($_POST['nama']) && isset($_POST['status']) && isset($_POST['timestamp']) || $_POST['nama'] != ""){
	$nama = $_POST['nama'];
	$status = $_POST['status'];
	$timestamp = $_POST['timestamp'];
	$data = new model();
	if($data->setStatus($nama,$status,$timestamp)){
		
	}else{
		echo "Tidak bisa membuat status";
	}
}
else{
	echo 'Ada masalah coba ulang lagi';
}
?>