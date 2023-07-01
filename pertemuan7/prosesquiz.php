<?php
if (isset($_POST['Proses'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $komentar = nl2br($_POST['komentar']);
    $gender = $_POST['gender'];
    echo "Nama : <b>$nama</b><br>";
    echo "E-mail : <b>$email</b><br>";
    echo "Website : <b>$website</b><br>";
    echo "Komentar : <b>$komentar</b><br>";
    echo "Gender : <b>$gender</b>";
}
?>