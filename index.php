<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <form method="POST" action="./check.php">
        <div>
            名前<br>
            <input type="text" name="name" value=""
        </div>
        <div>
            メールアドレス<br>
            <input type="email" name="email" value=""
        </div>
        <div>
            電話番号<br>
            <input type="tel" name="number" value=""
        </div>
        <div>
            お問合せ内容<br>
            <textarea name="content"  cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="送信">
    </form>
    <!-- <h2>管理者メニュー</h2>
    <ul>
        <li><a href="./view.php">お問い合わせ内容一覧</a></li>
    </ul> -->
</body>
</html>