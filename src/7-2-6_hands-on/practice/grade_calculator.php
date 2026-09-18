<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績判定システム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #e70e0e;
        }
        h2 {
            color: #000000;
        }
    </style>
</head>
<body>
    <h1>成績判定システム</h1>

    <h2>【個別成績】</h2>
<?php
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];


foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"];

    if ($score >= 90) {
        $grade = "評価A(優秀)";
    } else if ($score >= 80) {
        $grade = "評価B(良好)";
    } else if ($score >= 70) {
        $grade = "評価C(普通)";
    } else if ($score >= 60) {
        $grade = "評価D(要努力)";
    } else {
        $grade = "評価F(不合格)";
    }

    echo "{$name}: {$score}点 - 成績: {$grade}<br>";
}
?>

<h2>【統計情報】</h2>

<?php
$pass_count = 0;
$fail_count = 0;

foreach ($students as $student) {
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
}
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";

$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($students);
echo "平均点: " . number_format($average, 1) . "点<br>";

?>

</body>
</html>