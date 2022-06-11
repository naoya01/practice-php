<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>memo_do</title>
</head>
<body>
  <?php 
    $memo =filter_input(INPUT_POST,'memo',FILTER_SANITIZE_SPECIAL_CHARS);
    require('dbconnect.php');
    $stmt = $db->prepare('insert into memos (memo) values(?)');
    if (!$stmt):
      die($db->error);
    endif;
    $stmt->bind_param('s',$memo);
    $ret = $stmt->execute();
    if ($ret):
      echo '登録されました';
      echo '<br>→<a href="index.php">トップへ戻る</a>';
    else:
      $db->errot;
    endif;
  ?>
</body>
</html>