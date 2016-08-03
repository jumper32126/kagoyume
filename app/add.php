<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<?php session_start(); ?>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>カート追加画面</title>
</head>
  <body><? $code= $_GET["code"] ;
    $url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/itemLookup?appid=$appid&itemcode=$code&image_size=300&responsegroup=medium";
    $xml = simplexml_load_file($url);
    //var_dump($xml);?>
   <? $hits = $xml->Result->Hit;?>

   <? echo $hits->Name;?><br>
  <img src="<? echo $hits->ExImage->Url?>">
   <? echo  '価格:'.$hits->Price.'円';?>
   <? echo '評価'. $hits->Review->Rate.'(最大評価5)';?>
  <?  $code = $hits->Code;
  ?>
  <?php
   $name = $hits->Name;
   $price = $hits->Price;
   $rate = $hits->Review->Rate;
   $image = $hits->ExImage->Url;
   // var_dump($name);
   // var_dump($price);
   // var_dump($rate);
   // var_dump($image);
   $_SESSION['code'] = (string)$code;
   $_SESSION['name'] = (string)$name;
   $_SESSION['price'] = (string)$price;
   $_SESSION['rate'] = (string)$rate;
   $_SESSION['image'] = (string)$image;
   $cart= array('商品名' => $_SESSION['name'], '値段'=> $_SESSION['price'],'画像'=>$_SESSION['image'],'コード'=>$_SESSION['code']);
   $_SESSION['cart'][] = $cart;


  //unset($_SESSION['cart']);
   var_dump($_SESSION['cart']);
   ?><form action="<?php echo CART; ?>" method="POST">
     <input type="hidden" name = "code" value= "<?php echo $_SESSION['code'];?>">
     <input type="submit" value="カートに追加しました">
   </form>

<? echo return_top()?>
</body>
</html>
