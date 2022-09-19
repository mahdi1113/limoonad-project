<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>

    <div class="tile">
        <h6>اطلاعات خود را ویرایش کنید ...</h6>
        <form action="<?php echo route('auth','update') ?>" method="POST">

            <div class="form-group">
                <label for="title">نام کاربری</label>
                <input type="text" class="form-control" id="title" name="username" value="<?php echo $user->username ?>"/>
            </div>

            <div class="form-group">
                <label for="title">نام</label>
                <input type="text" class="form-control" id="title" name="firstname" value="<?php echo $user->firstname ?>"/>
            </div>

            <div class="form-group">
                <label for="title">نام خانوادگی</label>
                <input type="text" class="form-control" id="title" name="lastname" value="<?php echo $user->lastname ?>"/>
            </div>

            <div class="form-group">
                <label for="title">رمز عبور جدید</label>
                <input type="text" class="form-control" id="title" name="newpass" />
            </div>

            <div class="form-group">
                <label for="title">تکرار رمز عبور جدید</label>
                <input type="text" class="form-control" id="title" name="newpass-confirm" />
            </div>

            <div class="form-group">
                <label for="title">رمز عبور فعلی</label>
                <input type="text" class="form-control" id="title" name="password" />
            </div>

            <button class="btn btn-primary">ویرایش مطلب</button>

        </form>
    </div>

<?php include_once './views/include/footer.php' ?>
