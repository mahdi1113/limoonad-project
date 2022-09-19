<?php include_once './views/include/header.php' ?>
<?php include_once './views/include/aside.php' ?>

    <div class="tile">
        <a class="btn btn-primary" href="<?php echo route('blog','create') ?>">تعریف مطلب جدید</a>
    </div>

    <div class="tile">
        <h5>لیست مطالب</h5>
        
    <table class="table table-bordered" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">شماره</th>
      <th scope="col">عنوان</th>
      <th scope="col">تصویر</th>
      <th scope="col">تصویر پس زمینه</th>
      <th scope="col">محتوا</th>
      <th scope="col">تگ ها</th>
      <th scope="col">آپدیت</th>
      <th scope="col">حذف</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($blogs as $key => $blog): ?>
    <tr>
      <th scope="row"><?php echo ++$key ?></th>
      <td><?php echo $blog->title ?></td>
      <td>
        <?php
          if(isset($blog->image))
          {
            ?>
            <i class="fas fa-check text-success"></i>
            <?php
          }else {
            ?>
            <i class="fas fa-times text-danger"></i>
            <?php 
          }
        ?>
      </td>
      <td>
        <?php
          if(isset($blog->bg))
          {
            ?>
            <i class="fas fa-check text-success"></i>
            <?php
          }else {
            ?>
            <i class="fas fa-times text-danger"></i>
            <?php 
          }
        ?>
      </td>
      <td><?php echo show($blog->content) ??  '-' ?></td>
      <td><?php echo $blog->tags ??  '-' ?></td>
      <td><a class="btn btn-success" href="<?php echo route('blog','edit', ['id'=> $blog->id]) ?>">آپدیت</a></td>
      <td>
        <form action="<?php echo route('blog','delete',['id' => $blog->id]) ?>" method="POST">
          <button class="btn btn-danger">حذف</button>
        </form>
    </td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>

    </div>


<?php include_once './views/include/footer.php' ?>
