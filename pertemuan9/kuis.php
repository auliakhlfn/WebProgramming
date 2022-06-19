<?php
$NIP = 120103036;
$namapegawai = "Aulia Khalfani Izzati";
$gajipokok = 2000000;
$bonus = 500000;
$tunjangan = $gajipokok*5/100;
$pajak = $gajipokok*10/100;
$tot = $gajipokok + $bonus + $tunjangan - $pajak;
echo "====================<br>";
echo "NIP = $NIP <br>";
echo "Nama Pegawai = $namapegawai<br>";
echo "====================<br>";
echo "Gaji Pokok = Rp. $gajipokok<br>";
echo "Bonus = Rp. $bonus<br>";
echo "Tunjangan = Rp. $tunjangan<br>";
echo "Pajak = Rp. $pajak<br>";
echo "====================<br>";
$gajibersih=$gajipokok+$bonus+$tunjangan-$pajak;
echo "Gaji yang harus dibayarkan = Rp". $gajibersih;
?>

