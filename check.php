<?php
// var_dump($_POST);
// echo $_POST['nickname'];
// <script>alert('入力されたjava scriptによる攻撃')</script>

//サニタイジング
// echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');



$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

if($name === ''){
    $name_result = '入力されていません';
}else {
    $name_result = $name;
}
if($email === ''){
    $email_result = '入力されていません';
}else {
    $email_result = $email;
}
if($number === ''){
    $number_result = '入力されていません';
}else 
    $number_result = $number;
if($content === ''){
    $content_result = '入力されていません';
}else {
    $content_result = $content;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>
    <h1>お問い合わせ情報確認</h1>
    <p>名前:<?php  echo $name_result; ?></p>
    <p>メールアドレス:<?php  echo $email_result; ?></p>
    <p>電話番号:<?php  echo $number_result; ?></p>
    <p>お問い合わせ内容:<?php  echo $content_result; ?></p>

    <form method="POST" action="./thanks.php">
        <input type="hidden" name="name" value="<?php  echo $name; ?> ">
        <input type="hidden" name="email" value="<?php  echo $email; ?> ">
        <input type="hidden" name="number" value="<?php  echo $number; ?> ">
        <input type="hidden" name="content" value="<?php  echo $content; ?> ">

        <button type="button" onclick="history.back()">戻る</button>

        <?php if($name !== '' && $email !== '' && $number !== ''&& $content !== ''): ?> 
            <input type="submit" value="送信">
        <?php endif ?>
    </form>
</body>
</html>