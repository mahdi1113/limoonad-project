<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>



    <div class="tile">
        <a class="btn btn-primary" href="<?php echo route('product','create') ?>">تعریف محصول جدید</a>
    </div>

    <div class="tile">
        <h5>لیست محصولات</h5>
        
    <table class="table table-bordered" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">شماره</th>
      <th scope="col">عنوان</th>
      <th scope="col">قیمت</th>
      <th scope="col">تصویر</th>
      <th scope="col">توضیحات</th>
      <th scope="col">آپدیت</th>
      <th scope="col">حذف</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($products as $key => $product): ?>
    <tr>
      <th scope="row"><?php echo ++$key ?></th>
      <td><?php echo $product->title ?></td>
      <td><?php echo $product->price ?></td>
      <td>
        <?php
          if(isset($product->image))
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
      <td><?php echo show($product->description) ??  '-' ?></td>
      <td><a class="btn btn-success" href="<?php echo route('product','edit', ['id'=> $product->id]) ?>">آپدیت</a></td>
      <td>
        <form action="<?php echo route('product','delete',['id' => $product->id]) ?>" method="POST">
          <button class="btn btn-danger">حذف</button>
        </form>
    </td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>

    </div>


<?php include_once './views/include/footer.php' ?>
