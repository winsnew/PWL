
<?php
$nim = "A11.2010.13201";
$nama = 'Chairil_Prasojo';
$umur = 20;
$nilai = 90.00;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>