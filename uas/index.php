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

<body>
    <center><h3>TOKO EMBAH</h3><center>
    <!-- notifikasi -->
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username atau password salah!";
            }
            else if ($_GET['pesan'] == "logout") {
                echo "Anda telah berhasil Logout";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?>
    <br/>
    <center>
    <form method="POST" action="login.php">
        <table style="width:0%" class="table1">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"</td>
            </tr>
        </table>
    </form></center>
</body>
</html>