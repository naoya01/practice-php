<?php 
  $file = $_FILES['picture'];
 $success = move_uploaded_file($file['tmp_name'],$file['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    if ($success){
      echo '成功しました';
    } else {
      echo '失敗しました';
    }
  ?>
</body>
</html>