<?php
    $nim = $_POST['nim'];
    $matakuliah = $_POST['pilih'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $nilai1 = $tugas * 0.4;
    $nilai2 = $uts * 0.3;
    $nilai3 = $uas * 0.3;
    $nilaiakhir = $nilai1 + $nilai2 + $nilai3;
    if(isset($_POST['nim'])){

    }
    if ($nilaiakhir <= 50)
        {$grade = "E";}
    elseif ($nilaiakhir <= 70)
            {$grade = "B";}
    elseif($nilaiakhir <= 69)
    {$grade = "C";}
    elseif($nilaiakhir <= 59)
    {$grade = "D";}
    else{
        $grade = "A";
    }
    if($grade == "A"){
        $status = "LULUS";
    }
    elseif($grade == "B"){
        $status = "LULUS";
    }
    elseif($grade == "C"){
        $status = "LULUS";
    }
    else{
        $status = "TIDAK LULUS";
    }
    if(isset($_POST['yes'])){
        $pilihan = $_POST['pilih'];
    }
    
    if(isset($_POST['yes'])){
        $arrpilihan = array(isset($_POST['pilihan1'], $_POST['pilihan2'], $_POST['pilihan3']));
        if(in_array("Kehadiran => 70%", $arrpilihan)){
            $choose = $_POST['pilihan1'];
        if (in_array("interaktif di kelas", $arrpilihan)) {
            $choose2 = $_POST['pilihan2'];
        if(in_array("Tidak terlambat mengumpulkan tugas", $arrpilihan)){
            $choose3 = $_POST['pilihan3'];
        }
        
    }
        }
    }
    
    
    
        
    echo "<center>";
    echo "<table border=1 cellpadding=15>";
    echo "<tr bgcolor=grey>";
    echo "<td>Program Study</td>";
    echo "<td>NIM</td>";
    echo "<td>Nilai Akhir</td>";
    echo "<td>STATUS</td>";
    echo "<td>Catatan Khusus</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$matakuliah</td>";
    echo "<td>$nim</td>";
    echo "<td>$grade</td>";
    echo "<td>$status</td>";
    echo "<td>$choose<br>$choose2<br>$choose3</td>";
    echo "</tr>";
    
    
            
?>