<?php  
	$usernameKey = "admin";
	$passwordKey = "admin123";
	$usernameInput = $_POST['usr'];
	$passwordInput = $_POST['pas'];

	if (($usernameInput === $usernameKey) && ($passwordInput === $passwordKey)) {
		echo "Selamat Datang, anda sukses login";
	} else {
		echo "Mohon maaf, anda gagal login";
	}
?>