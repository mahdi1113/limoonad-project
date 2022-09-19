<?php include_once './views/include/header.php' ?>

<?php include_once './views/include/aside.php' ?>


    <div class="tile">
        <h5>لیست سفارشات</h5>
        
    <table class="table table-bordered" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">شماره</th>
      <th scope="col">کاربر</th>
      <th scope="col">آدرس</th>
      <th scope="col">تاریخ</th>
      <th scope="col">مجموع</th>
      <th scope="col">وضعیت پرداخت</th>
      <th scope="clo">مشاهده آیتم ها</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($orders as $key => $order): ?>
    <tr>
      <th scope="row"><?php echo ++$key ?></th>
      <td><?php echo $order->user() ?></td>
      <td><?php echo $order->address ?></td>
      <td><?php echo $order->persion_date() ?></td>
      <td><?php echo $order->total ?></td>
      <td>
        <?php
          if($order->payed)
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
        <form action="<?php echo page('show_items',['id'=> $order->id]) ?>" method="post">
          <button class="btn btn-primary">نمایش</button>
        </form>
    </td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>

    </div>


<?php include_once './views/include/footer.php' ?>
