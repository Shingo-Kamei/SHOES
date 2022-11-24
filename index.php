<?php
include("./cls/shoes.php");
include("./cls/brand.php");

$shoes = new Shoes();
$shoes_list = $shoes->fetchAll();

$brand = new Brand();
$brand_list = $brand->fetchAll();


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>shoes</title>
</head>
<body>
<!-- header -->
<header id="header">
    <h1 class="shoes-title">Outlet-Shoes</h1>

    <div id="hamburger-menu">
        <nav>
            <div class="nav-menu">
                <ul>
                    <li><a href="#pick-up">PICK UP</a></li>
                    <li><a href="#brand">BRAND</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="mask"></div>
</header>



<main id="main">
    <div id="video">
        <video class="video-loop" src="pexels-cottonbro-6764404.mp4" loop autoplay muted playsinline></video>
    </div>

    <section id="pick-up">
        <h2 class="sec-title">PICK UP</h2>
        <div class="pick-list">
            <ul class="pick-pict">
                <?php foreach($shoes_list as $shoes):?>
                    <li><img src="<?=$shoes["image_path"];?>" alt="" class='<?= $shoes["name"]?>'></li>
                <?php endforeach;?>
            </ul>
            <ul class="pick-pict">
                <?php foreach($shoes_list as $shoes):?>
                    <li><img src="<?=$shoes["image_path"];?>" alt="" class='<?= $shoes["name"]?>'></li>
                <?php endforeach;?>
            </ul>
        </div>
    </section>

    <section id="brand">
        <h2 class="sec-title">BRAND</h2>
        <ul class="brand-pict">
            <?php foreach($brand_list as $brand):?>
                <li class="brand-text">
                    <img src="<?=$brand["image_brand"];?>" alt="<?=$brand["alt"];?>">
                    <div class="brand-content"><h4><?=$brand["name"];?></h4>
                        <p class="top">テキストテキストテキスト</p>
                        <p class="center">テキストテキストテキスト</p>
                        <p class="under">テキストテキストテキスト</p>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </section>

    <section id="contact">
    <h2 class="sec-title">CONTACT</h2>
        <div class="contact-area">
            <div class="description">
                <p class="desc-top">テキストテキストテキストテキストテキストテキストテキスト</p>
                <p class="desc-center">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p class="desc-under">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>

            <form class="contact-form" action="#">
                <dl class="contact-text">
                    <dt><label for="name">Name:</label></dt>
                    <dd class="text-name"><input type="text" id="name" name="your-name"></dd>
                    <dt><label for="email">Mail:</label></dt>
                    <dd class="text-email"><input type="email" id="email" name="your-email"></dd>
                    <dt><label for="message">Message:</label></dt>
                    <dd class="text-message"><textarea id="message" name="your-message"></textarea></dd>
                </dl>
                <div class="button"><input type="submit" id="btn" value="SEND"></div>
            </form>
        </div>
        
    </section>
</main>

<footer id="footer">
    <p class="footer-title">company OutletShoes</p>
</footer>
    
<script src="./script.js"></script>
</body>
</html>