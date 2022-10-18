<div class="container mx-auto">
  <div class=" mt-5 bg-[#fafdff] h-36 flex justify-center items-center border border-dashed p-5">
    Cảm ơn bạn đã mua hàng, có tiền ròi huhu
  </div>
  <div class="flex text-center flex-col bg-[#fafdff] mt-4 rounded">
    <h2 class="text-center text-xl bg-primary text-white">Thông tin người nhận</h2>
    <div class="p-4">
      <div>tên: <?= $recipient['name'] ?></div>
      <div>số điện thoại: <?= $recipient['phone'] ?></div>
      <div>Địa chỉ: <?= $recipient['address'] ?></div>
    </div>
  </div>
  <div class=" mt-5 bg-[#fafdff] h-36 flex justify-center items-center border border-dashed p-5">
    Mã đơn hàng :<?= $order['id'] ?>
  </div>
  <div class=" p-2 mt-3 bg-[#fafdff]">
    <div class="py-2 inline-block min-w-full ">

      <div class="overflow-hidden">
        <table class="min-w-full border text-center">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                loại
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                tên
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                hình
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                Đơn giá
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                Số lượng
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 border-r py-4">
                Tổng giá
              </th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($rows) == 0) : ?>
              <p>Chưa có dữ liệu</p>
            <?php else : ?>
              <?php foreach ($rows as $row) : ?>
                <tr class="border-b">

                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    <?= $row['t_name'] ?? "" ?>
                  </td>

                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    <?=
                    $row['name'] ?? "" ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    <img class="mx-auto" src="<?= $CONTENT_URL ?>/images/<?php
                                                                          $img = product_image_select_by_product($row['product_id']);
                                                                          echo $img[0]['image'] ?>" width="100" alt="">
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    <?= $row['unit_price_one'] ?? "" ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    <?= $row['quantity'] ?? "" ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    <?= $row['sum_product'] ?? "" ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                Tổng tiền
              </td>
              <td colspan="4" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                <?= $order['total']  ?? "0" ?>đ
              </td>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>