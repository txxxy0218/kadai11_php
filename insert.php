<?php
//1. POSTデータ取得
$name     = $_POST["name"];
$email    = $_POST["email"];
$question = $_POST["question"];


//2. DB接続します
//*** function化する！  *****************
include("funcs.php");
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO sei_an_table(name,email,question,indate)VALUES(:name,:email,:question,sysdate())");
$stmt->bindValue(':name',     $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email',    $email,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':question', $question,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect("question.php");
}
?>
