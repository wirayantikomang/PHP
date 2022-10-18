<?php
$char = [3,2,5,3,7];
$total =0;
foreach($char as $x){
    $total=$total+$x;
}
$rata = $total/count($char);
echo "rata-rata =$rata";
?>