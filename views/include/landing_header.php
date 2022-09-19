<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Login - Vali Admin</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"> عنوان سایت </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo page('landing') ?>"> صفحه اصلی </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo page('blogs') ?>">مطالب سایت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo page('products') ?>">محصولات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo page('login') ?>">ناحیه کاربری</a>
                    </li>
                    <?php if(!user()){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo page('register') ?>">ثبت نام</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo page('cart') ?>">
                            <i style="width: 5px;height:5px" class="fas fa-shopping-bag"></i>
                            <i id="shoppin-cart-count" class="badge badge-pill badge-primary"><?php echo count_order_item() ?></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="vali-content">
        <div class="vali-box main-template p-3">

        <?php include_once './views/include/errors_and_message.php' ?>