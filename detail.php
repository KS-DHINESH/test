<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<nav>
    <h1><img src="image.png" alt="" width="25px">News Now</h1>
        <ul>
            <span class="material-symbols-rounded">dark_mode</span>
            <input type="text" placeholder="Search Here">
            <a href="">Home</a>
            <a href="">Categories</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </ul>
        <span class="material-symbols-rounded" id="mobile-menu">menu</span>
    </nav>
    <?php
        $data = json_decode($_GET['data'], true);
    ?>
    <div class="d-p">
        <div class="d-main">
            <h2><?php echo $data['title'];?></h2>
            <img src="<?php echo $data['urlToImage'];?>" alt="<?php echo $data['title'];?>">
            <h4><?php echo $data['description'];?></h4>
            <p><?php echo $data['content'];?></p>
            <a href="<?php echo $data['url'];?>" target='_blank'>Read Full Article</a>
        </div>
        <div class="d-side">
        </div>
    </div>

</body>
</html>

<style>
    .d-p{
        display: flex;
        padding: 10px;
    }
    .d-p .d-main{
        width: calc(65% - 20px);
        margin: 10px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .d-p .d-main img{
        width: 100%;
        border-radius: 20px;
    }
    .d-p .d-main a{
        background: linear-gradient(to right, white, var(--a));
        display: block;
        padding: 10px;
        text-align: right;
        font-weight: bold;
    }
    .d-p .d-main a:hover{
        background: linear-gradient(to right, white, var(--b));
    }
</style>