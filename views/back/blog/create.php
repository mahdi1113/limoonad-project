<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>


    <div class="tile">
        <a class="btn btn-primary" href="<?php echo route('blog','all') ?>">لیست مطالب</a>
    </div>

    <div class="tile">
        <h6>مطلب خود را وارد کنید ...</h6>
        <form action="<?php echo route('blog','store') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control" id="title" name="title" />
            </div>
            
            <div class="form-group">
                <label for="title">عکس</label>
                <input type="file" class="form-control" id="title" name="image" />
            </div>

            <div class="form-group">
                <label for="title">عکس پس زمینه</label>
                <input type="file" class="form-control" id="title" name="bg" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">محتوا مطلب</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1"> تگ ها ( با اینتر تگ ها را از هم جدا کنید )</label>
                <textarea class="form-control" name="tags" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button class="btn btn-primary">ساخت مطلب</button>

        </form>
    </div>


<?php include_once './views/include/footer.php' ?>
