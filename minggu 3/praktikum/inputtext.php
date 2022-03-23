<html>
    <head><title>Pengolahan form - Text</title>
    <body>
        <form action="inputtext.php" method="POST" name="input">
            Nama Anggota <br>
            <input type="text" name="nama1">
            <input type="text" name="nama2">
            <input type="text" name="nama3">
            <input type="text" name="nama4">
            <input type="submit" name="input" value="input">
        </form>
    </body>
</html>

<?php
if (isset($_POST['input'])){
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];
    echo "<b> nama anggota kelompok 1 :<br> </br>";
    echo $nama1."<br>";
    echo $nama2."<br>";
    echo $nama3."<br>";
    echo $nama4."<br>";
}

?>