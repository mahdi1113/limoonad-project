<?php include './views/include/landing_header.php';?>

<div class="row mt-3">

    <div class="col-4">
        <img style="width: 300px;" src="<?php echo $product->image ?>" alt="<?php echo $product->title ?>">
    </div>

    <div class="col-8">
        <h4>نام : <?php echo $product->title ?> </h4>
        <hr>
        <h5>توضیحات</h5>
        <p><?php echo $product->description ?></p>
        <hr>
        <h4 style="color: green;">قیمت محصول :<?php echo number_format($product->price) ?> تومان</h4>
        <?php if(user()){ ?>
        <div class="col-3 p-0 mb-2 mt-1">
        <input type="number" class="form-control" id="count_product" value="1" name="count" placeholder="تعداد">
        </div>
        <a href="javascript:void" id="add-to-cart" class="btn btn-primary" data-id="<?php echo $product->id ?>" data-url="<?php echo route('card','add') ?>" style="color:white" href="#">اضافه کردن به سبد خرید</a>
        <?php } else { ?>
            برای خرید نیاز به ثبت نام دارید !
        <?php } ?>
    </div>

</div>

<?php include './views/include/landing_footer.php';?>
