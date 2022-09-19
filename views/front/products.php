<?php include './views/include/landing_header.php';?>

<div class="row">
    <?php foreach($products as $product): ?>
    <div class="col-6">
        <div class="tile">
            <h3 class="tile-title"><?php echo $product->title ?></h3>
            <img style="width: 100px;" src="<?php echo $product->image ?>" alt="<?php $product->title ?>">
            <div class="tile-body"><?php echo show($product->description,71) ?></div>
            <hr>
            <a href="<?php echo page('product' , [ 'id' => $product->id]) ?>">ادامه مطلب ...</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>



<?php include './views/include/landing_footer.php';?>
