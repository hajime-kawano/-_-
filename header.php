<!DOCTYPE html>
<html lang="ja">

<head>
    <?php
    date_default_timezone_set('Asia/Tokyo');
    $current_date = new DateTime(); // 現在の日付を取得
    $switch_date = new DateTime('2024-11-1'); // 切り替え日付
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カサラゴ</title>
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Jomolhari&family=Junge&display=swap" rel="stylesheet">

    <?php
    if ($current_date <= $switch_date): ?>
        <link rel="stylesheet" href="css/before.css">
    <?php else: ?>
        <link rel="stylesheet" href="css/after.css">
    <?php endif; ?>

</head>

<body>
    <!--ヘッダー-->
    <header>
        <div class="coupon_header">
            Oisixをご利用のお客様限定15％割引キャンペーン
        </div>
    </header>