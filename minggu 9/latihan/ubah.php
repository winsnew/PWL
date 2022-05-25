<?php
include ('pbo4.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
    $data = $db->get_by_id($id);
}
else
{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <h3>update user</h3>
    <form method="POST" action="proses.php?action=update">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
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