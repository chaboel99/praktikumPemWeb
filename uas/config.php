
<?php
    $koneksi = mysqli_connect
    ("localhost","root","","barang_db");

    if (mysqli_connect_error()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>