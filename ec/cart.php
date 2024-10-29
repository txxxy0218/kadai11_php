<?php

// セッションがまだ開始されていなければセッションを開始
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// セッション変数 'products' が未設定であれば、空の配列で初期化
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

$item = isset($_POST['item'])? htmlspecialchars($_POST['item'], ENT_QUOTES, 'utf-8') : '';
$price = isset($_POST['price'])? htmlspecialchars($_POST['price'], ENT_QUOTES, 'utf-8') : '';
$count = isset($_POST['count'])? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';
$pattern = isset($_POST['pattern'])? htmlspecialchars($_POST['pattern'], ENT_QUOTES, 'utf-8') : '';
$friend = isset($_POST['friend'])? htmlspecialchars($_POST['friend'], ENT_QUOTES, 'utf-8') : '';
// $customed_itemを$item, $pattern, $friendの結合で作成
$customed_item = $item . '（' . $pattern . '）（' . $friend . '）';

//もし、sessionにproductsがあったら
if(isset($_SESSION['products'])){  
    //$_SESSION['products']を$productsという変数にいれる
    $products = $_SESSION['products'];
    //$productsをforeachで回し、キー(商品名)と値（金額・個数）取得
    foreach($products as $key => $product){  
        //もし、キーとPOSTで受け取った商品名が一致したら、
        if($key == $customed_item){ 
            //既に商品がカートに入っているので、個数を足し算する     
            $count = (int)$count + (int)$product['count'];
        }
    }
}

//配列に入れるには、値が取得できていることが前提なのでif文で空のデータを排除する
if($item != '' && $price != '' && $count != '' && $pattern != '' && $friend != ''){
    $_SESSION['products'][$customed_item] = [
        'price' => $price,
        'count' => $count,
        'pattern' => $pattern,
        'friend' => $friend
    ];
}    

$products = isset($_SESSION['products'])? $_SESSION['products']:[];

// POSTデータ 'delete_item' が存在するか確認し、存在すればエスケープ処理（HTMLエンコード）した値を代入。存在しなければ空文字を代入
$delete_item = isset($_POST['delete_item']) ? htmlspecialchars($_POST['delete_item'], ENT_QUOTES, 'utf-8') : '';
// 'delete_item' が空でなければ、対応する 'products' 配列のアイテムを削除
if ($delete_item != '') unset($_SESSION['products'][$delete_item]);

// 合計金額を計算するための変数を初期化
$total = 0;

// 'products' セッション変数が存在するかを確認し、存在すればその内容を代入。存在しなければ空の配列を代入
$products = isset($_SESSION['products']) ? $_SESSION['products'] : [];


foreach($products as $customed_item => $product){
    //各商品の小計を取得
    $subtotal = (int)$product['price']*(int)$product['count'];
    //各商品の小計を$totalに足す
    $total += $subtotal;
}

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
    <title>セイはてな｜カート</title>
</head>
<body>
    <?php
        include('../components/ec_header.php');
    ?>

    <main>
        <div class="cartlist">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>商品名</th>
                        <th>価格</th>
                        <th>個数</th>
                        <th>小計</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $customed_item => $product): ?>
                    <tr>
                        <td label="商品名："><?php echo $customed_item; ?></td>
                        <td label="価格：" class="text-right">¥<?php echo $product['price']; ?></td>
                        <td label="個数：" class="text-right"><?php echo $product['count']; ?></td>
                        <td label="小計：" class="text-right">¥<?php echo $product['price']*$product['count']; ?></td>
                        <td>
                            <!-- 削除ボタンのフォーム -->
                            <form action="cart.php" method="post" onsubmit="return confirm('本当にこの商品を削除しますか？')">
                                <input type="hidden" name="delete_item" value="<?php echo $customed_item; ?>">
                                <button type="submit" class="tertiary-button delete_button">削除</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr class="total">
                        <th colspan="3">合計</th>
                        <td colspan="2">¥<?php echo $total; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-btn">
                <a href="item_list.php"><button type="button" class="secondary-button">お買い物を続ける</button></a>
                <a href="pay.php"><button type="button" class="primary-button">購入手続きへ</button></a>
            </div>
        </div>
    </main>

    <?php
    include('../components/footer.php');
    ?>
    
</body>
</html>