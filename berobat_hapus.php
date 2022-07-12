<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM berobat WHERE id_berobatt = '{$id}'";
	$result = mysqli_query($conn, $sql);
	header('location: berobatt.php');
?>