<!DOCTYPE html>

<html>
<head>
 <title>TOKO EMBAH</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="font-family:arial">
 <center><h2>TOKO EMBAH<br/>Halaman Admin</h2></center>
    <!-- cek apakah sudah login -->
    <?php
        session_start();
        if($_SESSION['status']!="login"){
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    
 <hr />
 <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "config.php";
  $no = 1;
  $data = mysqli_query($koneksi,"SELECT * FROM barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id_barang;?>">Edit</a></td>
  <td align=right width=70px><a href="delete.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
 <center></br><a href="logout.php">LOGOUT</a></center>
</body>
</html>
