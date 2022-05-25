<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h3>tambah user</h3>

    <form method="POST" action="proses.php?action=$add">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type = "text" name="nama"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"/></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="text" name="usia"/></td>
           </tr>
           <tr>
               <td>Simpan</td>
               <td></td>
               <td><input type="submit" name="tombol" value="simpan"/></td> 
           </tr>
        </table>
    </form>




</body>


</html>