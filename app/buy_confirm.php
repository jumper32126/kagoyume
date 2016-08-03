<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<?php session_start(); ?>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>カート確認画面</title>
</head>
<body><? var_dump($_POST['cart'][0]);?>


  <?php if(!isset($_POST['cart'])){ echo'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
  }else{    ?>
    <h1>カート確認画面</h1>
    <?foreach($_SESSION['cart'] as $key => $value){?>

    商品:<?php echo $value['商品名'];?><br>
    値段:<?php echo $value['値段'];?><br>
         <img src="<? echo $value['画像'];?>"><br>
合計金額:<?php echo $_SESSION['price'];

  }?><? } ?>
<form action="<?php echo BUY_COMPLETE; ?>" method="POST">
<input type="radio" name="type" value = 1>ヤマト<br>
<input type="radio" name="type" value = 2>飛脚<br>
<input type="submit" value="上記の内容で購入する">
<input type="hidden" name = "cart" value= <?php 'confirmation';?>>
</form>

<? echo return_top();?>

  </body>
  </html>
