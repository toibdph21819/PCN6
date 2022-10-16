<div class="w-full container py-5 px-2 sm:px-10">
  <div class="text-sm">
    <h2 class="text-center my-3 text-2xl">Thanh toán</h2>
    <div class="bg-white p-5 mb-5">
      <div>
        <h3 class="mb-5 flex items-center space-x-2"><i class="fa-solid fa-location-dot text-primary"></i>
          <p class="text-primary">Địa chỉ nhận hàng</p>
        </h3>
        <select class="border p-3" name="" id="">
          <option value="">mời chọn</option>
          <?php foreach ($recipients as $recipient) : ?>
            <option value=""><?= $recipient['name'] ?>,<?= $recipient['phone'] ?>,<?= $recipient['address'] ?></option>
          <?php endforeach; ?>
        </select>

        <div class="space-x-3 text-xs">
          <a href="index.php?recipients">thêm người nhận</a>
        </div>
      </div>
    </div>
    <div class=" p-5 bg-white mb-5">
      <table class=" w-full">
        <tr class="text-sm">
          <td colspan="3" class=" p-2 text-lg">Sản phẩm</td>
          <td class=" p-2 text-center">đơn giá</td>
          <td class=" p-2 text-center">số lượng</td>
          <td class=" p-2 text-center">thành tiền</td>
        </tr>
        <?php foreach ($detail_order as $order) : ?>
          <?php $product = product_select_by_id($order['product_id']);
          $image = product_image_select_by_product($product['id']);
          ?>
          <tr class="text-xs">
            <td class="p-2"><img src="<?= $CONTENT_URL ?>/images/<?= $image[0]['image'] ?>" class="h-8 w-8" alt=""></td>
            <td class="max-w-[360px]">
              <p class=" max-w-[340px] overflow-hidden whitespace-nowrap text-ellipsis p-2"> <?= $product['name'] ?></p>
            </td>
            <td class=" p-2 text-center">loại: <?= $order['name'] ?></td>
            <td class=" p-2 text-center"><?= $product['price'] - ($product['voucher_discount'] ?? '0') ?></td>
            <td class=" p-2 text-center"><?= $order['quantity'] ?></td>
            <td class=" p-2 text-center"><?php $sum += ($product['price'] - ($product['voucher_discount'] ?? '0')) * $order['quantity'];
                                          $unit_price += $product['price'] * $order['quantity'];
                                          echo ($product['price'] - ($product['voucher_discount'] ?? '0')) * $order['quantity']  ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <form action="index.php?thanhtoan" method="post">
      <div class="flex mt-5 bg-[#fafdff] border border-dashed p-5">
        <div class="w-1/2 flex items-baseline gap-x-4">
          <label for="">Lời nhắn:</label>
          <input name="msg" class="shadow appearance-none border rounded w-64 h-8 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Lưu ý cho người bán" id="" type="text">
        </div>
      </div>
      <div class="p-5 bg-white flex justify-between border-b">
        <h2>Phương thức thanh toán</h2>
        <div class="text-xs">
          <div>Thanh toán khi nhận hàng</div>
        </div>
      </div>
      <div class="p-5 bg-white flex justify-between border-b">
        <div class="w-1/3 text-xs text-gray-500">
          <div class="flex w-full items-center justify-between">
            <p>Tổng tiền hàng</p>
            <div>
              <p>Giá:<?= $sum ?> đ</p>
              <p>Trước khi giảm:<?= $unit_price ?> đ</p>
            </div>
            <input type="hidden" name="sum" value="<?= $sum ?>">
            <input type="hidden" name="unit_price" value="<?= $unit_price ?>">
          </div>
        </div>
      </div>
      <div class="p-5 flex bg-white items-center justify-between">
        <p>Nhấn đặt hàng đồng nghĩa với việc bạn chấp nhận điều khoản của PCN6</p>
        <div><button name="submit" class="text-white bg-primary rounded-md px-10 py-5">Đặt hàng</button></div>
      </div>
    </form>
  </div>
</div>