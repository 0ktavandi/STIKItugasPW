<?php
function random(){
return rand(40,100);
}
//$db = new data_gua();
$data = array();
for ($i=1; $i<=100; $i++){
for ($j=1; $j<=6; $j++){
$data['id_karyawan'] = $i;
$data['id_nilai'] = $i;
$data['id_kriteria'] = $j;
$data['nilai'] = random();
print_r($data);
//$db->insert_me($data['id_kriteria,$data['id_karyawan'],$data['nilai']);

}
}


class data_gua{
private $servername = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'spk_saw';
	private $conn;
	function __construct() {
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$this->conn = $conn;
	}
	public function insert_me($idkrit,$idkar,$nilai){
	$query = "INSERT INTO spk_saw (id_kriteria,id_karyawan,nilai) VALUES ('$idkrit','$idkar','$nilai')";
	if(mysqli_query($this->conn,$query)){
	echo "[+] => success inserted\n";
		}
	}

}
