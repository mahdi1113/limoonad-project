<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>


    <div class="tile">
        <a class="btn btn-primary" href="<?php echo route('blog','all') ?>">لیست مطالب</a>
    </div>

    <div class="tile">
        <h6>مطلب خود را ویرایش کنید ...</h6>
        <form action="<?php echo route('blog','update',['id'=>$blog->id]) ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control" id="title" value="<?php echo $blog->title ?>" name="title" />
            </div>
            
            <div class="form-group">
                <label for="title">عکس</label>
                <input type="file" class="form-control" id="title" name="image" value="<?php echo $blog->image ?>"/>
            </div>

            <div class="form-group">
                <label for="title">عکس پس زمینه</label>
                <input type="file" class="form-control" id="title" name="bg" value="<?php echo $blog->bg ?>"/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">تگ ها</label>
                <textarea class="form-control" name="tags" id="exampleFormControlTextarea1" rows="3"><?php echo $blog->tags ?>
                </textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات مطلب</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?php echo $blog->content ?>
                </textarea>
            </div>

            <button class="btn btn-primary">ویرایش مطلب</button>

        </form>
    </div>

    <?php if(isset($blog->image)): ?>
    <div class="tile">
        <h5>تصویر</h5>
        <img src="<?php echo $blog->image ?>">        
    </div>
    <?php endif; ?>

    <?php if(isset($blog->image)): ?>
    <div class="tile">
        <h5>تصویر زمینه</h5>
        <img src="<?php echo $blog->bg ?>">        
    </div>
    <?php endif; ?>

<?php include_once './views/include/footer.php' ?>
