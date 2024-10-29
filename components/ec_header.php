<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <div class="logo"><a href="item_list.php">セイはてなモール</a></div>
    <div class="nav">
        <a href="" class="like"><i class="fa-solid fa-heart"></i> いいね</a>
        <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i> カート</a>
        <?php
        if($_SESSION){
            print '<a href="../question.php" class="post-question"><i class="fa-solid fa-paper-plane"></i> 質問管理</a>';
        }

        if(!$_SESSION){
            print '<a href="../login.php"><i class="fa-solid fa-right-to-bracket"></i> ログイン</a>';
        } else {
            print '<a href="../profile.php"><i class="fa-solid fa-circle-user"></i> プロフィール</a>';
        }
        
        if($_SESSION){
            print '<a href="../logout.php">ログアウト</a>';
        }
        ?>
        
    </div>
</header>
