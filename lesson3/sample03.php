<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample03</title>
</head>
<body>
  <?php 
    $db = new mysqli('localhost:8889','root', 'root','mydb');
    $message = "フォームから入力した値";
    $ret = $db->query('insert into memos (memo) values ("phpからのメモです")');
    if ($ret) {
    echo 'データの挿入をしました';
    } else {
      echo $db->errot;
    }
  ?>
</body>
</html>