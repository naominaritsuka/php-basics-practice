<?php
// src/index.php
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>はじめてのPHP</title>
</head>
<body>
    <h1>PHPの世界へようこそ！</h1>
    <P>PHPを使って、動的なコンテンツを表示してみましょう。</P> 
    <P>１＋１は、<?php echo 1 + 1; ?>です。</P>
    <P>現在の日時は、<?php echo date('Y年m月d日 H時i分s秒'); ?>です。</P>

<?php

// 文字列を直接出力
echo "Hello, PHP!";

echo '<p>HTMLタグも、そのまま出力できます。</p>';

// 数値や計算結果も出力可能
echo 123;
echo 10 + 5; // 結果の「15」が出力される

?>

</body>
</html>