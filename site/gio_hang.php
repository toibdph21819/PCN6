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
      <?php foreach ($detail_order as $order) : ?>
        <?php $product = product_select_by_id($order['product_id']);
        $image = product_image_select_by_product($product['id']);
        ?>
        <tr class="text-xs border-y-8">
          <td class="py-3 text-center"><?= $order['name'] ?></td>
          <td class="py-3 text-center"><img width="100%" height="100%" src="<?= $CONTENT_URL ?>/images/<?= $image[0]['image'] ?>" alt=""></td>
          <td class="py-3 text-center" style="-webkit-box-orient: vertical;-webkit-line-clamp: 2;display: -webkit-box;">
            <div class="text-xs overflow-hidden text-ellipsis" style="-webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box;">
              <?= $product['name'] ?>
            </div>
          </td>
          <td class="py-3 text-center"><?= $product['price'] - ($product['voucher_discount'] ?? '0') ?></td>
          <td class="py-3 text-center"><?= $order['quantity'] ?></td>
          <td class="py-3 text-center"><?= ($product['price'] - ($product['voucher_discount'] ?? '0')) * $order['quantity']  ?></td>
          <td class="py-3 text-center"><a class="text-red-500" href="index.php?giohang&delete&id=<?= $order['id'] ?>">xoá</a></td>
        </tr>
      <?php endforeach ?>

      <tr class="text-center">
        <td colspan="5" class="h-24">
        </td>
        <td colspan="2" class="h-24">
          <a href="index.php?thanhtoan" class="w-40 h-14 bg-primary rounded-md text-white hover:text-primary hover:bg-white hover:border-2 hover:border-primary">Mua hàng</a>
        </td>
      </tr>
    </table>

  </div>
</div>