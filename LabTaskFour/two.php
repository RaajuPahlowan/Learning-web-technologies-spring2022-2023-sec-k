<?php
//calculate the VAT (Value Added Tax) over an amount

$amount = 100; 

$vat = $amount * 0.15;

$total = $amount + $vat;

echo "Total amount including VAT: " . $total;
?>