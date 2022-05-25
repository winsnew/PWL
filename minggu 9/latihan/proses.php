<?php
include ('pbo4.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add")
{
    $koneksi->tambah_data($_POST['nama'], $_POST['alamat'], $_POST['usia']);
    header('location:index.php');  
}

elseif($action=="update")
{
    $id = $_POST['id'];
    $koneksi->update_data($_POST['nama'], $_POST['alamat'], $_POST['usia'], $id);
    header('location: index.php');
}
elseif($action=="delete")
{
    $id = $_GET['id'];
    $koneksi->delete_data($id);
    header('location:index.php');
}


?>