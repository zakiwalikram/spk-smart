<?php
error_reporting(0);
require_once "../_config/config.php";

if (isset($_POST['tambah'])) {
	$total = $_POST['total'];
	for ($i = 1; $i <= $total; $i++) {
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama-' . $i]));
		$k1 = trim(mysqli_real_escape_string($con, $_POST['k1-' . $i]));
		$k2 = trim(mysqli_real_escape_string($con, $_POST['k2-' . $i]));
		$k3 = trim(mysqli_real_escape_string($con, $_POST['k3-' . $i]));

		$sql = mysqli_query($con, "INSERT INTO tb_alternatif (id_alternatif, nama, k1, k2, k3) VALUES ('','$nama','$k1','$k2','$k3')");
	}
	if ($sql) {
		echo "<script>alert('" . $total . " data berhasil ditambahkan'); window.location='data.php';</script>";
	} else {
		echo "<script>alert('Gagal tambah data, coba lagi'); window.location='generate.php';</script>";
	}
} else if (isset($_POST['edit'])) {
	for ($i = 0; $i <= count($_POST['id']); $i++) {
		$id = $_POST['id'][$i];
		$nama = $_POST['nama'][$i];
		$k1 = $_POST['k1'][$i];
		$k2 = $_POST['k2'][$i];
		$k3 = $_POST['k3'][$i];
		mysqli_query($con, "UPDATE tb_alternatif SET nama = '$nama', k1 = '$k1', k2 = '$k2', k3 = '$k3' WHERE id_alternatif = '$id'") or die(mysqli_error($con));
	}
	echo "<script>alert('Data berhasil disimpan'); window.location='data.php';</script>";
}
