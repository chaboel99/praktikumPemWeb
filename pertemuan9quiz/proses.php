<?php
if (isset($_POST['Proses'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gapok = $_POST['gapok'];
    $bonus = $_POST['bonus'];
    $tun = 0.05*$gapok;
    $pajak = 0.1*$gapok;
    $total = (($gapok + $bonus) - ($tun + $pajak));
    echo "================================<br>";
    echo "NIP : <b>$nip</b><br>";
    echo "Nama Pegawai : <b>$nama</b><br>";
    echo "================================<br>";
    echo "Gaji Pokok : <b>$gapok</b><br>";
    echo "Bonus : <b>$bonus</b><br>";
    echo "Tunjangan : <b>$tun</b><br>";
    echo "Pajak : <b>$pajak</b><br>";
    echo "================================<br>";
    echo "Gaji yang harus dibayarkan Rp. $total ,-<br>";
}
?>