<!DOCTYPE html>
<html>
    <title>Kalkulator tugas php</title>
    
    <body>
    <?php
    if(isset($_POST['hasil'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $sys = $_POST['sys'];
    switch ($sys) {
        case 'tambah':
            $hasil = $bil1+$bil2;
            break;
        case 'kurang':
            $hasil = $bil1-$bil2;
            break;
        case 'bagi':
            $hasil = $bil1/$bil2;
            break;
        case 'kali':
            $hasil = $bil1*$bil2;
            break;
        }
    }
    ?>
        <form method="POST" action="kalkulator.php">
    <div class="container" style="position:absolute; text-align:center; right: 45%">
        <p>
        <label>bil 1</label>
        <input type="text" name="bil1" autocomplete="off">
        </p>
        <p>
        <label>bil2</label>
        <input type="text" name="bil2" autocomplete="off">
        </p>
        <p>
        <label>hasil</label>
        <?php if(isset($_POST('hasil')) ){ ?>
        <input type="text" value="<?php echo $hasil; ?>">
        <?php }else{ ?>
            <input type="text" value="0">
        <?php } ?>
        </p>
        <p>
        <label>operasi</label>
        <select class="op" name="sys">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="bagi">:</option>
            <option value="kali">x</option>
        </select>
        </p>
        <button style="position: absolute; text-align:center" name="hasil">=</button>
        </div>
    
        
    </div>
        </div>
        </form>
        
    </body>
</html>