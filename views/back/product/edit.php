<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>


    <div class="tile">
        <a class="btn btn-primary" href="<?php echo route('product','all') ?>">لیست محصولات</a>
    </div>

    <div class="tile">
        <h6>محصول خود را ویرایش کنید ...</h6>
        <form action="<?php echo route('product','update',['id'=>$product->id]) ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control" id="title" value="<?php echo $product->title ?>" name="title" />
            </div>

            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $product->price ?>"/>
            </div>
            
            <div class="form-group">
                <label for="title">عکس</label>
                <input type="file" class="form-control" id="title" name="image" value="<?php echo $product->image ?>"/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات محصول</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $product->description ?>
                </textarea>
            </div>

            <button class="btn btn-primary">ویرایش محصول</button>

        </form>
    </div>

    <?php if(isset($product->image)): ?>
    <div class="tile">
        <img src="<?php echo $product->image ?>">        
    </div>
    <?php endif; ?>


<?php include_once './views/include/footer.php' ?>
