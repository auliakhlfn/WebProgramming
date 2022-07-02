<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$ktpsiswa = $_POST['ktpsiswa'];
$nimsiswa = $_POST['nimsiswa'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

// Pengecekan kelengkapan data
if (empty($nama) || empty($ktpsiswa) || empty($nimsiswa) || empty($nohp) || empty($email) || empty($alamat)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO pegawai(nama, ktpsiswa, nimsiswa, nohp, email, alamat) VALUES ('$nama', '$ktpsiswa', '$nimsiswa', '$nohp', '$email', '$alamat')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}
