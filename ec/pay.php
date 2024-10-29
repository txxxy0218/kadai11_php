<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 値の受け取り
$buyer_name = isset($_POST['buyer_name']) ? htmlspecialchars($_POST['buyer_name'], ENT_QUOTES, 'utf-8') : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8') : '';
$tel = isset($_POST['tel']) ? htmlspecialchars($_POST['tel'], ENT_QUOTES, 'utf-8') : '';
$postcode = isset($_POST['postcode']) ? htmlspecialchars($_POST['postcode'], ENT_QUOTES, 'utf-8') : '';
$address = isset($_POST['address']) ? htmlspecialchars($_POST['address'], ENT_QUOTES, 'utf-8') : '';

// フォームが送信された場合、$_SESSIONにデータを保存
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['buyer_name'] = $buyer_name;
    $_SESSION['email'] = $email;
    $_SESSION['tel'] = $tel;
    $_SESSION['postcode'] = $postcode;
    $_SESSION['address'] = $address;
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
    <title>セイはてな</title>
</head>
<body>
    <?php
        include('../components/ec_header.php');
    ?>

    <main>
        <form action="pay_conf.php" method="POST" class="pay-info">
            <h2>ご購入者情報</h2>
            <div class="info-wrapper">
                <div class="input-wrapper">
                    <label for="buyer_name">お名前</label>
                    <input type="text" name="buyer_name" placeholder="はなこママ" value="<?php echo isset($_SESSION['buyer_name']) ? htmlspecialchars($_SESSION['buyer_name']) : ''; ?>" required>
                </div>
                <div class="input-wrapper">
                    <label for="email">メールアドレス</label>
                    <input type="text" name="email" placeholder="hanako@gmail.com" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" required>
                </div>
                <div class="input-wrapper">
                    <label for="tel">電話番号</label>
                    <input type="text" name="tel" placeholder="08012345678" value="<?php echo isset($_SESSION['tel']) ? htmlspecialchars($_SESSION['tel']) : ''; ?>" required>
                </div>
                <div class="input-wrapper">
                    <label for="">お届け先</label>
                    <p class="bold">郵便番号</p>
                    <input type="text" name="postcode" placeholder="123-4567" value="<?php echo isset($_SESSION['postcode']) ? htmlspecialchars($_SESSION['postcode']) : ''; ?>" required>
                    <p class="bold">住所</p>
                    <input type="text" name="address" placeholder="東京都中央区銀座1-2-3 メゾンABC101号" value="<?php echo isset($_SESSION['address']) ? htmlspecialchars($_SESSION['address']) : ''; ?>" required>
                </div>
                
                <button type="submit" class="primary-button">送信する</button>  
            </div>
        </form>
    </main>

    <?php
    include('../components/footer.php');
    ?>
    
</body>
</html>
