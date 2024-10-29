<?php
    // 値の受け取り
    $buyer_name = isset($_POST['buyer_name'])? htmlspecialchars($_POST['buyer_name'],ENT_QUOTES,'utf-8'):'';
    $email = isset($_POST['email'])? htmlspecialchars($_POST['email'],ENT_QUOTES,'utf-8'):'';
    $tel = isset($_POST['tel'])? htmlspecialchars($_POST['tel'],ENT_QUOTES,'utf-8'):'';
    $postcode = isset($_POST['postcode'])? htmlspecialchars($_POST['postcode'],ENT_QUOTES,'utf-8'):'';
    $address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';
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
            <form action="pay_end.php" method="POST">
                <h2>ご購入者情報</h2>
                <div class="info-wrapper">
                    <div class="input-wrapper">
                        <label for="buyer_name">お名前</label>
                        <p><?=$buyer_name?></p>
                        <input type="hidden" name="buyer_name" value="<?php echo $buyer_name; ?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="email">メールアドレス</label>
                        <p><?=$email?></p>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="tel">電話番号</label>
                        <p><?=$tel?></p>
                        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    </div>
                    <div class="input-wrapper">
                        <label for="">お届け先</label>
                        <p>郵便番号</p>
                        <p><?=$postcode?></p>
                        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
                        <p>住所</p>
                        <p><?=$address?></p>
                        <input type="hidden" name="address" value="<?php echo $address; ?>">
                    </div>
                    
                    <div class="conf-message">
                        <p>この内容で送信してよろしいですか？</p>
                        <div class="buttons">
                            <button type="submit" formaction="pay.php" class="secondary-button">修正する</button>
                            <button type="submit" class="primary-button">購入する</button>  
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php
    include('../components/footer.php');
    ?>
    
</body>
</html>