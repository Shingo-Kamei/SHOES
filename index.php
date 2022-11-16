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

    <nav id="nav">
        <ul class="nav-menu">
            <li><a href="#PICK UP">PICK UP</a></li>
            <li><a href="FEATURE">FEATURE</a></li>
            <li><a href="CONTACT">CONTACT</a></li>
        </ul>
    </nav>
</header>



<main id="main">
    <div id="video">
        <video class="video-loop" src="pexels-cottonbro-6764404.mp4" loop autoplay muted playsinline></video>
    </div>

    <section id="pick-up">
        <h2 class="sec-title">PICK UP</h2>
        <ul class="pick-pict">
            <?php foreach($shoes_list as $shoes):?>
                <li><img src="<?=$shoes["image_path"];?>" alt="" class='<?= $shoes["name"]?>'></li>
            <?php endforeach;?>
        </ul>
    </section>

    <section id="brand">
        <h2 class="sec-title">BRAND</h2>
        <ul class="brand-pict">
            <?php foreach($brand_list as $brand):?>
                <li class="brand-text">
                    <img src="<?=$brand["image_brand"];?>" alt="">
                    <div class="brand-content">
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
        <form action="#">
            <dl class="contact-text">
                <dt><label for="name">Name:</label></dt>
                <dd><input type="text" id="name" name="your-name"></dd>
                <dt><label for="email">Mail:</label></dt>
                <dd><input type="email" id="email" name="your-email"></dd>
                <dt><label for="message">Message:</label></dt>
                <dd><textarea id="message" name="your-message"></textarea></dd>
            </dl>
            <div class="button"><input type="submit" value="SEND"></div>
        </form>
    </section>
</main>

<footer id="footer">
    <p>company OutletShoes</p>
</footer>
    
    
</body>
</html>