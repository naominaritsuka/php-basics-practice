<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity =2;
$tax_rate = 0.10;

echo "製品名:  " . $product_name . "<br>";
echo "単価:  " . $price . "円<br>";
$subtotal = $price * $quantity;
echo "数量:  " . $quantity . "個<br>";
echo "小計:  " . $subtotal . "円<br>";
$tax = $subtotal * $tax_rate;
echo "税額(10％):  " . $tax . "円<br>";
echo "合計金額(税込):  " . ($subtotal + $tax) . "円<br>";

?>