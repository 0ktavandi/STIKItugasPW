<?php
function tugas(){
	include "config.php";
	$date=null;
	echo "<form action=\"index.php\" method=\"post\">";
	echo "<select name=\"Y\">";
	for ($j=1990; $j<=2020; $j++){
	echo "<option value=".$j.">".$j."</option>";
	}
	echo "</select>";
	$bulan = array(	'1' => "Januari",
					'2' => "Februari",
					'3' => "Maret",
					'4' => "April",
					'5' => "Mei",
					'6' => "Juni",
					'7' => "Juli",
					'8' => "Agustus",
					'9' => "September",
					'10'=> "Oktober",
					'11'=> "November",
					'12'=> "Desember");
	echo "<select name=\"m\">";
	foreach ($bulan as $key => $value) {
	print_r("<option value=".$key.">".$value."</option>");
	}
	echo "</select>";
	echo "<select name=\"d\">";
	for ($date=1; $date<=31; $date++){
	echo "<option value=".$date.">".$date."</option>";
	}
	echo "</select>";
	echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">";
	$foo = date($_POST['Y']."-".$_POST['m']."-".$_POST['d']);
	//$safe = mysqli_real_escape_string($foo);
	if(isset($_POST['submit'])){
	$query = "INSERT INTO tglahir (tgl) VALUES ('$foo')";
	if (!mysqli_query($conn, $query)) {
		echo "Error Message : ".mysqli_error($conn);
	}else{
	echo "<script>alert('success')</script>";
	}
	}
	echo "</form>";
	}
	tugas();
?>
