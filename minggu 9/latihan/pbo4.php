<?php
class data 
{
    public $host = "localhost";
    public $name = "root";
    public $pass = "";
    public $dbname = "";

    public $mysqli;
    function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);

        if($this->mysqli->connect_errno){
            echo "database anda tidak ada : ";
            exit;
        }
    }

    public function get_show(){
        $data = "SELECT * FROM user ";
        $result = $this->mysqli->query(data);

        while ($d = mysqli_fetch_array($hasil)) {
            $result2[] = $d;
        }
        return $result;
    }

    function tambahData($nama,$alamat,$usia)
    {
        mysqli_query($this->mysqli, "insert into user values ('','$nama','$alamat','$usia')");
    }
    function get_by_id($id)
    {
        $query = mysqli_query($this->mysql,"SELECT * FROM user where id='$id'");
        return $query->fetch_array();
    }
    function update_data($nama,$alamat,$usia,$id)
    {
        $query = mysqli_query($this->mysqli,"UPDATE user SET nama = '$nama', alamat ='$alamat',usia = '$usia', where id = '$id'");
    }

    function delete_data($id)
    {
        $query = mysqli_query($this->mysqli,"DELETE from user where id = '$id'");
    }
}

?>