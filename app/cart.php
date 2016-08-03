<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<?php session_start(); ?>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>カート内画面</title>
</head>
  <body>
    <?php //var_dump($_GET['code']);?>
    <?$price = 0 ?>

<?php if(!isset($_SESSION['code'])){ echo'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
}else{?>
  <?//echo $_SESSION['name']?><br>

<? // var_dump($_SESSION['cart'])?>

<?foreach($_SESSION['cart'] as $key => $value){?>

<a href="<?php echo ITEM ?>?item=<?php echo $value['コード'];?>"><?php echo $value['商品名'];?></a><br>
<?echo $price+=$value['値段'];?><br>
<img src="<? echo $value['画像'];?>"><br>
<form action="<?php echo CART_DELETE ?>" method="POST">
<input type="submit" value="削除">
<input type="hidden" name="delete" value=<?echo $key;?>>
</form>
<?
}
echo $price.'<br>';
}
?>
<form action="<?php echo BUY_CONFIRM; ?>" method="POST">
  <input type="submit" value="購入する">
  <input type="hidden" name = "cart" value= <?php 'confirmation';?>>
</form>
<? $_SESSION['price'] = $price;?>



<? echo return_top()?>
</body>
</html>
