<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<?php session_start();?>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>商品詳細画面</title>
</head>
  <body><?  $item = $_GET["item"] ;
    $url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/itemLookup?appid=$appid&itemcode=$item&image_size=300&responsegroup=medium";
    $xml = simplexml_load_file($url);
    //var_dump($xml);?>
   <? $hits = $xml->Result->Hit;?>

   <? echo $hits->Name;?><br>
  <img src="<? echo $hits->ExImage->Url?>">
   <? echo  '価格:'.$hits->Price.'円';?>
   <? echo '評価'. $hits->Review->Rate.'(最大評価5)';?>
  <?  $code = $hits->Code;
  ?>

<form action="<?php echo ADD; ?>" method="GET">
  <input type="hidden" name = "code" value= "<?php echo $code;?>">
  <input type="submit" value="カートに追加する">
</form>
  <? //echo $hits->Code;?>
<?php
 $name = $hits->Name;
 $price = $hits->Price;
 $rate = $hits->Review->Rate;
 $image = $hits->ExImage->Url;
 // var_dump($name);
 // var_dump($price);
 // var_dump($rate);
 // var_dump($image);
 $_SESSION['name'] = (string)$name;
 $_SESSION['price'] = (string)$price;
 $_SESSION['rate'] = (string)$rate;
 $_SESSION['image'] = (string)$image;
?>
<? echo return_top()?>
  </body>
</html>
