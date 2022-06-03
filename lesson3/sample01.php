<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lesson01</title>
</head>
<body>
  <?php 
    $db = new mysqli('localhost:8889','root', 'root','mydb');
    /* new mysqli('host:ポート番号','username', 'password','データベース名') */
    echo ' DBに接続しました';
  ?>
</body>
</html>