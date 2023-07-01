<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION="proses.php" METHOD="POST" NAME="input">
            <h1>================================</h1>
            NIP : <input type="text" name="nip"><br><br>
            Nama Pegawai : <input type="text" name="nama"><br>
            <h1>================================</h1>
            Gaji Pokok : <input type="text" name="gapok"><br><br>
            Bonus : <input type="text" name="bonus"><br><br>
            Tunjangan : 5% dari gaji pokok<br><br>
            Pajak : 10% dari gaji pokok<br>
            <h1>================================</h1>
            <input type="submit" name="Proses" value="Submit">
            </FORM>
    </body>   
</html>