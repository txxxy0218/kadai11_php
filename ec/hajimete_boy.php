<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
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

    <main class="mobile-first">

            <div class="mobile-section">
                <img src="img/hajimete_boy.jpg" alt="" class="item-page-img">
                <div class="item-info">
                    <div class="item-name">
                        <a href="hajimete_boy.php"><h2>はじめてのおうち性教育キット for boy</h2></a>
                        <h3>4,980円（税込）</h3>    
                    </div>
                    <div class="tag-wrapper">
                        <a class="tag">#男の子向け</a>
                        <a class="tag">#5歳〜</a>
                        <a class="tag">#プライベートゾーン</a>
                        <a class="tag">#境界(バウンダリー)と同意</a>
                    </div>
                    <p>小学校に入学する前に、集団生活で気をつけるべきことや学べるキット。プライベートゾーンや境界（バウンダリー）について知ることで、お友達とのトラブルや性犯罪にあうリスクを減らせます。</p>
                    <a href="#custom"><button class="primary-button">カートに入れる</button></a>
                </div>
            </div>

            <div class="mobile-section">
                <h2>キット内容</h2>
                <div class="kit-wrapper">

                    <div class="kit-item">
                        <img src="img/1.png" alt="">
                        <div class="kit-item-info">
                            <p class="kit-item-category">絵本</p>
                            <h3>だいじだいじどーこだ</h3>
                            <p>本の説明が入るよ</p>
                            <div class="tag-wrapper">
                                <a class="tag">#2歳〜</a>
                                <a class="tag">#プライベートゾーン</a>
                            </div>
                        </div>
                    </div>

                    <div class="kit-item">
                        <img src="img/1.png" alt="">
                        <div class="kit-item-info">
                            <p class="kit-item-category">絵本</p>
                            <h3>だいじだいじどーこだ</h3>
                            <p>本の説明が入るよ</p>
                            <div class="tag-wrapper">
                                <a class="tag">#2歳〜</a>
                                <a class="tag">#プライベートゾーン</a>
                            </div>
                        </div>
                    </div>

                    <div class="kit-item">
                        <img src="img/1.png" alt="">
                        <div class="kit-item-info">
                            <p class="kit-item-category">絵本</p>
                            <h3>だいじだいじどーこだ</h3>
                            <p>本の説明が入るよ</p>
                            <div class="tag-wrapper">
                                <a class="tag">#2歳〜</a>
                                <a class="tag">#プライベートゾーン</a>
                            </div>
                        </div>
                    </div>

                    <div class="kit-item">
                        <img src="img/1.png" alt="">
                        <div class="kit-item-info">
                            <p class="kit-item-category">絵本</p>
                            <h3>だいじだいじどーこだ</h3>
                            <p>本の説明が入るよ</p>
                            <div class="tag-wrapper">
                                <a class="tag">#2歳〜</a>
                                <a class="tag">#プライベートゾーン</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mobile-section">
                <h2>使い方</h2>
                <iframe width="100%" height="240" src="https://www.youtube.com/embed/7ZZgctOwiGQ?si=ud6oTNj1iW7FJlon" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="mobile-section">
                <h2>先輩ママ・パパの声</h2>
                <div class="review-wrapper">
                    <div class="review">
                        <img src="img/男1.png" alt="">
                        <p>レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！<br>3歳男児パパ</p>
                    </div>
                    <div class="review">
                        <p>レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！<br>3歳男児ママ</p>
                        <img src="img/女2.png" alt="">  
                    </div>
                    <div class="review">
                        <img src="img/男3.png" alt="">
                        <p>レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！レビューが入るよ！<br>3歳男児パパ</p>
                    </div>
                </div>
            </div>

            <div class="mobile-section" id="custom">
                <h2>カスタマイズ</h2>
                <form action="cart.php" method="post" class="custom-item">
                    <div class="custom-wrapper">
                        <h3>お風呂セット</h3>
                        <div class="custom-item">
                            <h4>絵柄</h4>
                            <div class="radio-wrapper">
                                <input type="radio" class="radio" name="pattern" id="car" value="車">
                                <label for="car">車</label>

                                <input type="radio" class="radio" name="pattern" id="hero" value="ヒーロー">
                                <label for="hero">ヒーロー</label>

                                <input type="radio" class="radio" name="pattern" id="kuro-ba-" value="クローバー">
                                <label for="kuro-ba-">クローバー</label>

                                <input type="radio" class="radio" name="pattern" id="check" value="チェック">
                                <label for="check">チェック</label>
                            </div>   
                        </div>
                        <div class="custom-item">
                            <h4>お風呂フレンド</h4>
                            <div class="radio-wrapper">
                                <input type="radio" class="radio" name="friend" id="f-lion" value="ライオン">
                                <label for="f-lion">ライオン</label>

                                <input type="radio" class="radio" name="friend" id="f-ahiru" value="あひる">
                                <label for="f-ahiru">あひる</label>

                                <input type="radio" class="radio" name="friend" id="f-frog" value="かえる">
                                <label for="f-frog">かえる</label>

                            </div>   
                        </div>
                        <input type="hidden" name="item" value="はじめてのおうち性教育キット for boy">
                        <input type="hidden" name="price" value="4980">
                        <input type="hidden" name="count" value="1">
                    </div>
                    <button class="primary-button">カートに入れる</button>
                </form>
            </div>
           
        </div>
    </main>

    <?php
    include('../components/footer.php');
    ?>
    
</body>
</html>