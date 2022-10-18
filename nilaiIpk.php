<?php  
		$ipk = $_POST['ipk'];
		$predikat = "";
		if ($ipk >= 2.76 && $ipk <=3.0) {
			$predikat = "Memuaskan";
		}elseif ($ipk > 3.0 && $ipk <=3.50) {
			$predikat = "Sangat Memuaskan";
		}elseif ($ipk > 3.5) {
			$predikat = "Dengan Pujian";
		} else {
			$predikat = "Tidak mendapat predikat";
		}
		echo "IPK Anda : ";
		echo $ipk;
		echo "<br>";
		echo "Predikat Anda : ";
		echo $predikat;	
	?>