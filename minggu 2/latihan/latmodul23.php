<html>
<head>
<title>Faktorial while</title>
</head>
<style>
body
h1 {
 text-align:center;
}
h2 {
 text-align:center;
}
</style>
<body>
<form name="latmodul23.php" method="post">
<table>
<tr>
<td>Masukkan Angka</td>
<td><input type="text" name="txtAngka" size="5"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
</tr>
</table>
<?php
error_reporting(0);
if($_POST['hasil']!=''){
            $angka=$_POST['txtAngka'];
            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil;
            }elseif($angka>1){
                        $i=1;
                        while($i<=5)
                        {
                            $i=$i+1;
                             $hasil=$angka * faktorial($angka-1);
                        }
                        return $hasil;
            }
}
         
   echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>

</form>
</body>
</html>