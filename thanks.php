<?php
// echo $_POST['name'];
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

    // データベースに接続
    // $dsn = 'mysql:dbname=phpkiso;host=localhost';
    // $user = 'root';
    // $password = '';
    // $dbh = new PDO($dsn, $user, $password);
    // $dbh -> query('SET NAMES UTF8');

    // $stmt = $dbh->prepare('INSERT INTO survey SET name=?,email=?,content=?');
    // $stmt->execute([$name,$email,$content]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
</head>
<body>
    <h1>お問い合わせありがとうございました。</h1>
    <p>お問い合わせ内容</p>
    <p>名前: <?php echo $name; ?></p>
    <p>メールアドレス: <?php echo $email; ?></p>
    <p>電話番号: <?php echo $number; ?></p>
    <p>お問い合わせ: <?php echo $content; ?></p>

    <a href="./index.php">入力画面へ戻る</a>
</body>
</html>