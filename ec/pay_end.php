<?php
    // 値の受け取り
    $buyer_name = isset($_POST['buyer_name'])? htmlspecialchars($_POST['buyer_name'],ENT_QUOTES,'utf-8'):'';
    $email = isset($_POST['email'])? htmlspecialchars($_POST['email'],ENT_QUOTES,'utf-8'):'';
    $tel = isset($_POST['tel'])? htmlspecialchars($_POST['tel'],ENT_QUOTES,'utf-8'):'';
    $postcode = isset($_POST['postcode'])? htmlspecialchars($_POST['postcode'],ENT_QUOTES,'utf-8'):'';
    $address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $products = isset($_SESSION['products'])? $_SESSION['products']:[];
    $total = 0;
    foreach($products as $key => $product){
        $subtotal = (int)$product['price']*(int)$product['count'];
        $total += $subtotal;
    }

    include("../funcs.php");
    $dbh = db_conn(); // db_connの戻り値を$dbhに代入

    //ordersテーブル
    $stmt1 = $dbh->prepare("INSERT INTO orders(buyer_name,email,tel,postcode,address,total,created_at,updated_at) VALUES(:buyer_name,:email,:tel,:postcode,:address,:total,now(),now())");
    $stmt1->bindParam(':buyer_name',$buyer_name);
    $stmt1->bindParam(':email',$email);
    $stmt1->bindParam(':tel',$tel);
    $stmt1->bindParam(':postcode',$postcode);
    $stmt1->bindParam(':address',$address);
    $stmt1->bindParam(':total',$total);
    $stmt1->execute();

    // //ordersのid取得
    $order_id = $dbh->lastInsertId();

    //order_productsテーブル
    foreach($products as $key => $product){
        $stmt2 = $dbh->prepare("INSERT INTO order_products(order_id,product_name,num,price) VALUES(:order_id,:product_name,:num,:price)");
        $stmt2->bindParam(':order_id',$order_id);
        $stmt2->bindParam(':product_name',$key);
        $stmt2->bindParam(':num',$product['count']);
        $stmt2->bindParam(':price',$product['price']);
        $stmt2->execute();
    }

    //カートを空にする
    unset($_SESSION['products']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" /><!-- reset.css ress -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>セイはてな</title>
</head>
<body>
    <?php
        include('../components/ec_header.php');
    ?>

    <main>
        <div class="pay-info">
            <h2>ご購入者情報</h2>
            <div class="info-wrapper">
                <h3>ご購入ありがとうございました！</h3>
                <a href="item_list.php"><button class="primary-button">トップページに戻る</button></a>
            </div>
        </div>
    </main>

    <?php
    include('../components/footer.php');
    ?>
    
</body>
</html>