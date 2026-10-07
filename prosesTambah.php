<?php
session_start();

$folderTujuan = "bukti_bayar/";
$namaFile = basename($_FILES["buktiBayar"]["name"]);
$alamatFile = $folderTujuan . $namaFile;

if (move_uploaded_file($_FILES["buktiBayar"]["tmp_name"], $alamatFile)) {
 $pesanUpload = "Bukti pembayaran berhasil diupload.";
} else {
 $pesanUpload = "Gagal upload bukti pembayaran.";
}

$tiketBaru = [
 "nama" => $_POST["nama"],
 "kategori" => $_POST["kategori"],
 "harga" => $_POST["harga"],
 "bukti" => $alamatFile
];

$_SESSION["daftarWar"][] = $tiketBaru;

header("Location: dashboard.php");
exit;