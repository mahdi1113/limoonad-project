<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>


    <div class="tile">
        <a class="btn btn-primary" href="<?php echo route('product','all') ?>">لیست محصولات</a>
    </div>

    <div class="tile">
        <h6>محصول خود را وارد کنید ...</h6>
        <form action="<?php echo route('product','store') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control" id="title" name="title" />
            </div>

            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="number" class="form-control" id="price" name="price" />
            </div>
            
            <div class="form-group">
                <label for="title">عکس</label>
                <input type="file" class="form-control" id="title" name="image" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات محصول</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button class="btn btn-primary">ساخت محصول</button>

        </form>
    </div>


<?php include_once './views/include/footer.php' ?>
