<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td {
            border : 1px solid black;
        }
    </style>
</head>
<body>
    <form action = "latihan1a.php" method = "POST">
<?php 

 $suhu = [23,45,36,27,33,32,30,28,35,32];
$i = 1;
echo "<table>";


foreach ($suhu as $s) {
    echo "<tr>";

    echo "<td> Hari ke-$i</td>";
    echo"<td>$s</td>";
    $i = $i + 1;
}
?> 

</body>
</html>
