<div class="p-10 container mx-auto w-full flex justify-center">
  <div class="  bg-white mx-auto">
    <div class="h-20 text-3xl leading-[80px] px-3">Giỏ hàng</div>
    <table class="px-5 ">
      <tr>
        <th class="w-40 border-y-8 h-12">loại</th>
        <th class="w-40 border-y-8 h-12">hình</th>
        <th class="w-40 border-y-8 h-12">tên</th>
        <th class="w-40 border-y-8 h-12">đơn giá</th>
        <th class="w-40 border-y-8 h-12">số lượng</th>
        <th class="w-40 border-y-8 h-12">giá tiền</th>
        <th class="w-40 border-y-8 h-12">thao tác</th>
      </tr>
      <?php $i = 0;
      foreach ($_SESSION['cart'] as $order) : ?>
        <tr class="text-xs border-y-8">
          <td class="py-3 text-center"><?php $type = types_select_by_id($order[7]);
                                        echo $type['name']  ?></td>
          <td class="py-3 text-center"><img width="100%" height="100%" src="<?= $CONTENT_URL ?>/images/<?= $order[2] ?>" alt=""></td>
          <td class="py-3 text-center" style="">
            <?= $order[1] ?>
          </td>
          <td class="py-3 text-center"><?= $order[3] ?></td>
          <td class="py-3 text-center"><?= $order[4] ?></td>
          <td class="py-3 text-center"><?= $order[6]  ?></td>
          <td class="py-3 text-center"><a class="text-red-500" href="index.php?giohang&delete&id=<?= $i ?>">xoá</a></td>
        </tr>
        <?php $i += 1 ?>
      <?php endforeach ?>

      <tr class="text-center">
        <td colspan="4" class="h-24">
        </td>
        <td colspan="3" class="h-24">
          <a href="index.php?thanhtoan" class="w-40 h-14 bg-primary rounded-md p-3 text-white hover:text-primary hover:bg-white hover:border-2 hover:border-primary">Đồng ý đặt hàng</a>
          <a href="index.php?giohang&delete" class="w-40 h-14 bg-primary rounded-md p-3 text-white hover:text-primary hover:bg-white hover:border-2 hover:border-primary">Xoá giỏ hàng</a>
        </td>
      </tr>
    </table>

  </div>
</div>