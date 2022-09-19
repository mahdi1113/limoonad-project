<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." />
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="@pratikborsadiya" />
        <meta property="twitter:creator" content="@pratikborsadiya" />
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Vali Admin" />
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme" />
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin" />
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png" />
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." />
        <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="public/css/main.css" />
        <!-- Font-icon css-->
        <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
        <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body class="app sidebar-mini">
        <!-- Navbar-->
        <header class="app-header">
            <a class="app-header__logo" href="index.php">صفحه اصلی</a>
            <!-- Sidebar toggle button-->
            <a style="line-height: 2;" class="app-sidebar__toggle fas fa-list" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
                
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search" />
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>

                <li style="margin:14px;cursor:pointer;">
                    <a style="color:white" href="<?php echo route('auth','logout') ?>">
                    خروج
                    </a>
                </li>

                <li style="margin:14px;cursor:pointer;">
                    <a style="color:white" href="<?php echo page('edit') ?>">
                    ویرایش اطلاعات
                    </a>
                </li>

            </ul>
        </header>
