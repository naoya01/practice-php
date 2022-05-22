<?php 
  $succes = file_put_contents('data/news.txt','ホームページをリニューアルしました');
  if ($succes !== false ){
    echo 'ファイルの読み込みに成功しました';
  } else {
    echo 'ファイルの読み込みに失敗しました';
  }
?>