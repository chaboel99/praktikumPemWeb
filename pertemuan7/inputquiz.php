<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION="prosesquiz.php" METHOD="POST" NAME="input">
            <h1>PHP Form Validation</h1><br><br>
            <b><font color='red'> * required field</font></b><br><br>
            Nama    : <input type="text" name="nama"><br><br>
            E-mail  : <input type="text" name="email"><br><br>
            Website : <input type="text" name="website"><br><br>
            Komentar:<textarea name="saran" cols="40" rows="5"></textarea><br><br>
            Gender  : <input type="radio" name="gender" value="Female" checked>Female
            <input type="radio" name="gender" value="Male" checked>Male<br><br>
            <input type="submit" name="Proses" value="Submit">
            </FORM>
    </body>   
</html>
