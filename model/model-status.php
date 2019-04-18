<?php
class model
{

	public function setStatus($owner,$status,$timestamp){
		include ("koneksi.php");
		$query =  "INSERT INTO `tb_status` (`id_status`, `owner`, `content`, `time`, `timestamp`) VALUES (NULL, '".$owner."', '".$status."', CURRENT_TIMESTAMP, '".$timestamp."');";
		$hasil = $conn->query($query);
		return $hasil;
	}
	public function loadData(){
		include ("koneksi.php");

		$query = "SELECT * FROM `tb_status` ORDER BY `time` DESC ";
		$hasil = $conn->query($query);
		return $hasil;
	}
	public function HapusData($id){
		include ("koneksi.php");
		$query = "DELETE FROM `tb_status` WHERE `tb_status`.`id_status` = ".$id."";
		$hasil = $conn->query($query);
		return $hasil;
	}

}
?>