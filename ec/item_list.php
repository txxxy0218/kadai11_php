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
        <div class="search">
            <input type="text" placeholder="検索したい質問を入力">
            <button type="submit">検索 <i class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        <div class="items-wrapper">

            <div class="item-card" id="toitore_boy">
                <a href="toitore_boy.php"><img src="img/toitore_boy.jpg" alt="" class="item-card-img"></a>
                <div class="item-info">
                    <div class="item-name">
                        <a href="toitore_boy.php"><h3>はじめてのトイトレちゃれんじキット for boy</h3></a>
                        <h4>5,980円（税込）</h4>
                    </div>
                    <div class="tag-wrapper">
                        <a class="tag">#男の子向け</a>
                        <a class="tag">#1歳半〜</a>
                        <a class="tag">#トイトレ</a>
                        <a class="tag">#プライベートゾーン</a>
                        <a class="tag">#体の部位の名前</a>
                    </div>
                    <p>トイトレを通して、触らせたり見せたりしてはいけない体の部位を楽しく覚えられるキット。トイトレフレンドと一緒に遊びながら、歌いながら楽しくトイトレに取り組める！</p>
                </div>
            </div>

            <div class="item-card" id="toitore_girl">
                <a href="toitore_girl.php"><img src="img/toitore_girl.jpg" alt="" class="item-card-img"></a>
                <div class="item-info">
                    <div class="item-name">
                        <a href="toitore_girl.php"><h3>はじめてのトイトレちゃれんじキット for girl</h3></a>
                        <h4>5,980円（税込）</h4>
                    </div>
                    <div class="tag-wrapper">
                        <a class="tag">#女の子向け</a>
                        <a class="tag">#1歳半〜</a>
                        <a class="tag">#トイトレ</a>
                        <a class="tag">#プライベートゾーン</a>
                        <a class="tag">#体の部位の名前</a>
                    </div>
                    <p>トイトレを通して、触らせたり見せたりしてはいけない体の部位を楽しく覚えられるキット。トイトレフレンドと一緒に遊びながら、歌いながら楽しくトイトレに取り組める！</p>
                    
                </div>
            </div>

            <div class="item-card" id="hajimete_boy">
                <a href="hajimete_boy.php"><img src="img/hajimete_boy.jpg" alt="" class="item-card-img"></a>
                <div class="item-info">
                    <div class="item-name">
                        <a href="hajimete_boy.php"><h3>はじめてのおうち性教育キット for boy</h3></a>
                        <h4>4,980円（税込）</h4>
                    </div>
                    <div class="tag-wrapper">
                        <a class="tag">#男の子向け</a>
                        <a class="tag">#5歳〜</a>
                        <a class="tag">#プライベートゾーン</a>
                        <a class="tag">#境界(バウンダリー)と同意</a>
                    </div>
                    <p>小学校に入学する前に、集団生活で気をつけるべきことや学べるキット。プライベートゾーンや境界（バウンダリー）について知ることで、お友達とのトラブルや性犯罪にあうリスクを減らせます。</p>
                </div>
            </div>

            <div class="item-card" id="hajimete_girl">
                <a href="hajimete_girl.php"><img src="img/hajimete_girl.jpg" alt="" class="item-card-img"></a>
                <div class="item-info">
                    <div class="item-name">
                        <a href="hajimete_girl.php"><h3>はじめてのおうち性教育キット for girl</h3></a>
                        <h4>4,980円（税込）</h4>
                    </div>
                    <div class="tag-wrapper">
                        <a class="tag">#女の子向け</a>
                        <a class="tag">#5歳〜</a>
                        <a class="tag">#プライベートゾーン</a>
                        <a class="tag">#境界(バウンダリー)と同意</a>
                    </div>
                    <p>小学校に入学する前に、集団生活で気をつけるべきことや学べるキット。プライベートゾーンや境界（バウンダリー）について知ることで、お友達とのトラブルや性犯罪にあうリスクを減らせます。</p>
                </div>
            </div>
           
        </div>
    </main>

    <?php
    include('../components/footer.php');
    ?>
    
</body>
</html>