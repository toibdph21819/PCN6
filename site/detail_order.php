<div class=" p-10">
  <div class="bg-white p-5">
    <div class="flex space-x-2 justify-end">
      <a href="index.php?my_order" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
    </div>

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