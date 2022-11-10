<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h1>DAFTAR HOBI YG KUPILIH</h1>";
$hobi=$_POST["hobi"];
$i = 0;
echo "<ol>";
foreach($hobi as $r){
    echo "<li>";
    echo $hobi[$i];
    $i = $i + 1;
    echo "</li>";
}

echo "<a href = './latihan3.php'> Kembali </a>";

?>

</body>
</html>