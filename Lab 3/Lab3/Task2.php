<?php

$amount = 500; 

$vat = $amount * 0.15; 
$totalAmount = $amount + $vat;


echo "Given amount of $amount Taka<br>";
echo "VAT (15%) = $vat Taka<br>";
echo "Total amount after VAT = $totalAmount Taka<br>";

?>