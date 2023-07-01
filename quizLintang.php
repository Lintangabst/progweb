<?php
$nip = "100111";
$nama = "Lintang Arbi Suto";
$gaji_pokok = 2000000;
$bonus = 500000;
$tunjangan = $gaji_pokok * 0.05;
$pajak = $gaji_pokok * 0.1;

$total_gaji = $gaji_pokok + $bonus + $tunjangan - $pajak;

echo "====================\n";
echo "NIP : $nip\n";
echo "Nama Pegawai : $nama\n";
echo "====================\n";
echo "Gaji Pokok : $gaji_pokok\n";
echo "Bonus : $bonus\n";
echo "Tunjangan : $tunjangan\n";
echo "Pajak : $pajak\n";
echo "====================\n";
echo "Gaji yang harus di bayarkan : $total_gaji\n";
?>
