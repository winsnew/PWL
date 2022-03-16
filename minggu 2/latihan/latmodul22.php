<html>
<head><title>For faktorial</title></head>
<body>
<FORM ACTION="latmodul22.php" METHOD="POST" NAME="input">
Masukkan Angka : <input type="text" name="number"><br>
<input type="submit" name="input" value="hasil">
</FORM>
</body>
</html>

<?php
    $hitungan = 1;
    $number = $_POST['number'];
    if($number <= 0) {
        echo "Angka tersebut bukan bilangan bulat";
    } else {
        for($i = 1; $i <= $number; $i++) {
            $hitungan *= $i;
        }
   
    }
    if(isset($_POST['input'])) {
        $number = $_POST['number'];
        echo "Faktorial dari : ". $number . " adalah ". $hitungan;
    }
?>