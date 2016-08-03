<?php
/** @mainpage
 *  商品検索フォームを表示
 */

/**
 * @file
 * @brief 商品検索フォームを表示
 *
 * 商品検索フォームを表示し、
 * フォームから入力された値を条件に、検索APIを利用して、検索した結果をhtmlに埋め込んで表示します。
 * 検索結果に対して、カテゴリーによる絞り込みと、並び順の変更ができます。
 *
 * PHP version 5
 */

require_once("../common/common.php");//共通ファイル読み込み(使用する前に、appidを指定してください。)
require_once '../common/defineUtil.php';

// $hits = array();
// $query = !empty($_GET["query"]) ? $_GET["query"] : "";
// $sort =  !empty($_GET["sort"]) && array_key_exists($_GET["sort"], $sortOrder) ? $_GET["sort"] : "-score";
// $category_id = ctype_digit($_GET["category_id"]) && array_key_exists($_GET["category_id"], $categories) ? $_GET["category_id"] : 1;
//

?>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
        <title>ショッピングデモサイト - 商品を検索する</title>
        <link rel="stylesheet" type="text/css" href="../css/prototype.css"/>
    </head>
    <body>
        <h1><a href="./top.php">ショッピングデモサイト - 商品を検索する</a></h1>
      <form action="<?php echo SEARCH ?>" method="GET"> <!--<form action="./top.php" class="Search">-->
        <h2>買った気になるサイトです</h2>
        <input type="text" name="query" >
        <input type="submit" value="Yahooショッピングで検索"/>
        </form>

    </body>
</html>
