<?php
include 'pbo4.php';
$mysqli = new database();
?>

<h3>data user</h3>
<p><a href = "tambah.php"><button>Tambah</button></a></p>
<table border="1">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Aksi</th>
    </tr>
        <?php $no=1; ?>
        <?php foreach ($mysqli->get_show() as $show) { ?>
    <tr>
        <td><?php echo $no++; ?> </td>
        <td><?php echo $show['nama']; ?></td>
        <td><?php echo $show['alamat']: ?></td>
        <td><?php echo $show['usia']; ?></td>
        <td>
            <a href='ubah php?id=<?php echo $show['id']; ?>'>Ubah</a>
            <a href='proses.php?action=delete&id=<?php echo $show['id']; ?>'>Hapus</a>
        </td>
    </tr>
    <?php
        }
        ?>
</table>