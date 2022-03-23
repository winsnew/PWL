<html>
    <head><title>Pengolahan form</title></head>
    <body>
        <form action="" method="POST" name="input">
            nama anda : <input type="text" name="nama"><br>
            <input type="submit" name="Input" value="Input">
        </form>
    </body>
</html>
<?php
if(isset($_POST['input'])) { $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>"; }
?>