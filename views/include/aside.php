<aside class="app-sidebar">
            <div class="app-sidebar__user">
                <!-- <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image" /> -->
                
                <div>
                    <p class="app-sidebar__user-name"><?php echo user()->fullName() ?></p>
                    <p class="app-sidebar__user-designation"><?php echo user('type') ?></p>
                </div>
            </div>
            <ul class="app-menu">

                <li>
                    <a class="app-menu__item active" href="index.php"><i class="app-menu__icon icon-dashboard"></i><span class="app-menu__label">داشبورد</span></a>
                </li>

                <li>
                    <a class="app-menu__item" href="<?php echo route('product','all') ?>"><i class="app-menu__icon fas fa-shopping-basket"></i><span class="app-menu__label">مدیریت محصولات</span></a>
                </li>

                <li>
                    <a class="app-menu__item" href="<?php echo route('blog','all') ?>"><i class="app-menu__icon fas fas fa-book-open"></i><span class="app-menu__label">مدیریت مطالب</span></a>
                </li>

                <li>

                <li>
                    <a class="app-menu__item" href="<?php echo route('order','all') ?>"><i class="app-menu__icon fas fa-list"></i><span class="app-menu__label">لیست سفارشات</span></a>
                </li>
                
            </ul>
        </aside>

<main class="app-content">
    <?php include_once './views/include/errors_and_message.php' ?>
</p>

   