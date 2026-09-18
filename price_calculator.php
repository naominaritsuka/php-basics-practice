<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品価格計算</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .result {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        h2 {
            color: #333;
            text-align: center;
            }
        .line {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }
        .total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #0066cc;
            font-size: 20px;
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>
<body>
   <div class="result">

<h1>商品価格計算</h1>
<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

echo "<div class='line'>製品名:  " . $product_name . "</div>";
echo "<div class='line'>単価:  " . $price . "円</div>";
$subtotal = $price * $quantity;
echo "<div class='line'>数量:  " . $quantity . "個</div>";
echo "<div class='line'>小計:  " . $subtotal . "円</div>";
$tax = $subtotal * $tax_rate;
echo "<div class='line'>消費税(10％):  " . $tax . "円</div>";
echo "<div class='total'><strong>合計金額(税込):  " . ($subtotal + $tax) . "円</strong></div>";


//さらに、割引計算の例を追加します
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
echo "<div class='line'>元の価格:  " . $original_price . "円</div>";
echo "<div class='line'>割引率:  " . ($discount_rate * 100) . "%</div>";
echo "<div class='line'>割引後の価格:  " . $final_price . "円</div>";
?>
</div>


<div class="result">

<?php
//群数奇数判定プログラム
$number = 7;

if ($number % 2 == 0) {
    echo "群数奇数判定プログラムでは{$number}は偶数です。<br>";
} else {
    echo "群数奇数判定プログラムでは{$number}は奇数です。<br>";
}

//複数条件の判定
$age = 25;
$is_member = true;
$is_student = false;

// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "18歳以上かつ会員様ですと割引が適用されます。<br>";
}

// 条件2: 65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "{$age}歳ですとシニア・学生割引が適用されます。<br>";
}
?>
</div>   

<div class="result">
<h2>ゲームスコア計算</h2>
<?php
//複合代入演算子
$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50; // 50点加算
echo "ボーナスステージ50加点: {$score}点<br>";

$score -= 30; // 30点減算
echo "ダメージ30減点: {$score}点<br>";

$score *= 2; // スコアを2倍
echo "アイテム使用スコア2倍: {$score}点<br>";
echo "<div class='total'>最終スコア: {$score}点</div>";


?>
</div>
</body>
</html>
