<?php include './views/include/landing_header.php';?>

<div class="container">
    <form action="<?php echo route('Auth','register') ?>" method="POST">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>ثبت نام</h3>

        <div class="form-group">
            <label class="control-label">نام</label>
            <input name="firstname" class="form-control" value="<?php echo old('firstname') ?>" type="text" />
        </div>

        <div class="form-group">
            <label class="control-label">نام خانوادگی</label>
            <input name="lastname" class="form-control" value="<?php echo old('lastname') ?>" type="text" />
        </div>

        <div class="form-group">
            <label class="control-label">نام کاربری</label>
            <input name="username" class="form-control" value="<?php echo old('username') ?>" type="text" />
        </div>

        <div class="form-group">
            <label class="control-label">رمز عبور</label>
            <input name="password-confirm" class="form-control" type="text" />
        </div>

        <div class="form-group">
            <label class="control-label">تکرار رمز عبور</label>
            <input name="password" class="form-control" type="text" />
        </div>

        <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>ثبت نام</button>
        </div>
    </form>
</div>

<?php include './views/include/landing_footer.php';?>
