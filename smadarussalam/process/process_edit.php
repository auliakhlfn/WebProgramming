<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$ktpsiswa = $_POST['ktpsiswa'];
$nimsiswa = $_POST['nimsiswa'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];


if (empty($nama) || empty($ktpsiswa) || empty($nimsiswa) || empty($nohp) || empty($email) || empty($alamat)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', ktpsiswa = '$ktpsiswa', nimsiswa = '$nimsiswa', nohp = '$nohp', email='$email',alamat = '$alamat' WHERE id='$id'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}
