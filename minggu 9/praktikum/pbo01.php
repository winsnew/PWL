<?
class mobil
{
    var $warna = "Biru";
    var $merk = "BMW";
    var $harga = "10000000";
    var $kondisi = "Baru";
    var $tahun = "2021";
        function __construct() {
            $this->warna = "Biru";
            $this->merk = "BMW";
            $this->harga = "10000000";
            $this->kondisi = "Baru";
            $this->tahun = "2021";
        }

    function gantiWarna ($warnaBaru) {
        $this -> warna = $warnaBaru;
    }
    function tampilWarna () {
        echo "warna mobil : " . $this->warna;
    }
}

$a = new Mobil ();
$b = new Mobil ();
echo "<b>Mobil Pertama</b></br>";
$a->tampilWarna();
echo "<b>Mobil Pertama Ganti Warna</b></br>";
$a->gantiWarna("Merah");
$a->tampilWarna();
//
echo "<br><b>Mobil Kedua</b></br>";
$b-> gantiWarna("Hijau");
$b-> tampilWarna();
?>
