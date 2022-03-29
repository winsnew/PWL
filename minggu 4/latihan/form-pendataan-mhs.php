<html>
    <head><title>Form pendataan mahasiswa</title></head>
    <body>
        <style>
            table {
                width: 40%;
            }
            .center {
                margin-left: auto;
                margin-right: auto;
            }
        </style>
        
        <form action="tugas2/simpan2.php" method="POST">
            <table class="center" rules="all" border="1" >
        <tr>
            <td>NIM</td>
            <td><input type="text" style="height: 40px; width: 100%;" name="nim" placeholder="masukkan nim anda"></td>
        </tr>       
        <tr>
            <td>Pilih Jurusan</td>
            <td>
            <select style="height: 40px;" name="pilih">
            <option value="Pilih data">Pilih data</option>
            <option value="Informatika S1">Teknik Informatika S1</option>
            <option value="Sistem Informasi S1">Sistem Informasi S1</option>
            <option value="Informatika D3">Teknik Informatika D3</option>
            </select>
        </td>
        </tr>
        <tr>
            <td >Nilai tugas</td>
            <td><input type="text" style="height: 40px; width: 100%;" name="tugas" placeholder="masukkan nilai"></td>
        </tr>
        
        <tr>
            <td >Nilai uts</td>
            <td><input type="text" style="height: 40px; width: 100%;" name="uts" placeholder="masukkan nilai"></td>
        </tr>
        
        <tr>
            <td >Nilai uas</td>
            <td><input type="text" style="height: 40px; width: 100%;" name="uas" placeholder="masukkan nilai"></td>
        </tr>   
        
        <tr>
            <td>Catatan khusus</td>
            <td><input type="checkbox"  name="pilihan1" value="Kehadiran => 70%" >
        Kehadiran => 70%<br>
        <tr>
            <td></td>
            <td><input type="checkbox" name="pilihan2" value="interaktif di kelas" >
                interaktif di kelas<br></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="pilihan3" value="Tidak terlambat mengumpulkan tugas" >
                Tidak terlambat mengumpulkan tugas<br></td>
            
        </tr>
            </td>
        </tr>
        <tr>
            <td></td>
            <td rules="rows"><input type="submit" name="yes" value="SIMPAN"></td>
        </tr>
        </table>
        </div>
        </form>
    </body>
</html>