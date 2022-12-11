<?php
function angkaRomawi($angka)
{
	 $angka = intval($angka);
	 $result = '';
	 
	 $array = array('M' => 1000,
	 'D' => 500,
	 'L' => 50,
	 'XL' => 40,
	 'X' => 10,
	 'IX' => 9,
	 'V' => 5,
	 'CD' => 400,
	 'C' => 100,
	 'XC' => 90,
	 'CM' => 900,
	 'IV' => 4,
	 'I' => 1);
	 
	 foreach($array as $roman => $value){
	 $matches = intval($angka/$value);
	 
	 $result .= str_repeat($roman,$matches);
	 
	 $angka = $angka % $value;
	}
	 
	 return $result;
}

?>
<html>
<body>
	<form action="#" method="POST">
		Angka : <input type="number" name="angka"><br>
		<button type="submit">Konversi</button>
	</form>
	Romawi : <?php error_reporting(0);
	echo angkaRomawi($_POST["angka"]); ?><br>
</body>
</html>

