<? require_once '../common/scriptUtil.php'; ?>
<? require_once '../common/defineUtil.php'; ?>

<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報検索画面</title>
</head>
  <body>

      <?
      $hits = array();
      $query = !empty($_GET["query"]) ? $_GET["query"] : "";
      // $sort =  !empty($_GET["sort"]) && array_key_exists($_GET["sort"], $sortOrder) ? $_GET["sort"] : "-score";
      // $category_id = ctype_digit($_GET["category_id"]) && array_key_exists($_GET["category_id"], $categories) ? $_GET["category_id"] : 1;
      if ($query != ""){
          $query4url = rawurlencode($query);
          // $sort4url = rawurlencode($sort);
          $url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch?appid=$appid&query=$query4url";
          $xml = simplexml_load_file($url);
          if ($xml["totalResultsReturned"] != 0){//検索件数が0件でない場合,変数$hitsに検索結果を格納します。
              $hits = $xml->Result->Hit;
            }}
              ?>
            <?php foreach ($hits as $hit) { ?>

            <div class="Item">
                <h2><a href="<?php echo ITEM ?>?item=<?php echo h($hit->Code);?>"> <?php echo h($hit->Name); ?> </a></h2>
                <p><a href="<?php echo ITEM ?>?item=<?php echo h($hit->Code); ?>"><img src="<?php echo h($hit->Image->Medium); ?>" /></a><?php echo h($hit->Description); ?></p>
                  <? echo  $hit->Price.'円'?>

            </div>

            <?php } ?>
            <? echo return_top()?>
       </body>
       </html>
