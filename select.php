<?php
// 1.DB接続
require_once('funcs.php');
$pdo = db_conn();

// 2.SQL用意
$stmt = $pdo ->prepare("SELECT * FROM gs_bm_table");

// 3.実行
$status = $stmt->execute();

// 4.データ表示
$view = "";

if($status == false){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
 //Selectデータの数だけ自動でループしてくれる
 while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
   $view .= "<p>";
   $view .= $result['indate'].'|'.$result['name'].'|'.$result['url'].'|'.$result['comment'];
   $view .= "</p>";
 }

}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブックマーク表示</title>
</head>
<body>
<header>

</header> 

<main>
    <div class="container jumbotron"><?= $view?></div>
</main>


</body>
</html>

