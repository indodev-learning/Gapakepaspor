<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Federal Site</title>
</head>
<body id="<?php if(empty($_GET['page'])){echo 'home';}else{echo $_GET['page'];} ?>">
    <header>
        <div class="container">
            <div class="row">
                <div class="grid col-3">
                    <a href="" class="logo">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="grid col-9">
                    <?php include 'menu.php' ?>
                </div>
            </div>
        </div>
    </header>
    