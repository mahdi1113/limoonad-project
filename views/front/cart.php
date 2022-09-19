<?php include './views/include/landing_header.php';?>

<?php if($order){ ?>

<div class="container">
      <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">محصول</th>
        <th scope="col">قیمت</th>
        <th scope="col">تعداد</th>
        <th scope="col">قابل پرداخت</th>
        <th scope="col">حذف</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($order->items() as $i => $item): ?>
      <tr>
        <th scope="row"><?php echo ++$i ?></th>
        <td><?php echo $item->product_name ?></td>
        <td><?php echo $item->amount ?></td>
        <td><?php echo $item->count ?></td>
        <td><?php echo $item->payable() ?></td>
        <td>
          <form action="<?php echo route('card','delete') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $item->id ?>">
            <button class="btn btn-warning">حذف</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <h4 class="mb-3">مبلغ پرداختی : <span class="badge badge-success"><?php echo $order->total ?> تومان</span></h4>
  <form action="<?php echo route('card','pay') ?>" method="post">
  <label>آدرس خود را وارد کنید ...</label>
  <input type="text" name="address">
  <button class="btn btn-primary">تایید و پرداخت</button>
  </form>

</div>
<?php }else{ ?>

    <div class="alert alert-danger"> سبد خرید شما خالی است  </div>
<?php }?>

<hr>

<?php include './views/include/landing_footer.php';?>
