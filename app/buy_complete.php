<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<?php session_start(); ?>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>カート確認画面</title>
</head>
<body>
  <?php
   if(!isset($_POST['cart'])){ echo'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
  }else{echo '購入が完了しました';
   unset($_SESSION['cart']);
 }

echo return_top();  ?>
  </body>
  </html>
