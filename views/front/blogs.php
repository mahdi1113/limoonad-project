<?php include './views/include/landing_header.php';?>

<div class="row">
    <?php foreach($blogs as $blog): ?>
    <div class="col-6">
        <div class="tile">
            <h3 class="tile-title"><?php echo $blog->title ?></h3>
            <img style="width: 100px;" src="<?php echo $blog->image ?>" alt="<?php $blog->title ?>">
            <div class="tile-body"><?php echo $blog->content ?></div>
            <hr>
            <a href="#">ادامه مطلب ...</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>



<?php include './views/include/landing_footer.php';?>
