<?php include './views/include/landing_header.php';?>

<div class="container">
    <form action="<?php echo route('Auth','login') ?>" method="POST">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>ورود</h3>
        <div class="form-group">
            <label class="control-label">نام کاربری</label>
            <input name="username" class="form-control" type="text" />
        </div>

        <div class="form-group">
            <label class="control-label">رمز عبور</label>
            <input name="password" class="form-control" type="text" />
        </div>

        <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>ورود</button>
        </div>
    </form>
</div>

<?php include './views/include/landing_footer.php';?>
