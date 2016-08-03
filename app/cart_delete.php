<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<?php session_start(); ?>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>削除画面</title>
</head>
  <body>
  <?  $num = $_POST['delete'] ;

   unset($_SESSION['cart'][$num]);

  ?>
</body>
</html>
