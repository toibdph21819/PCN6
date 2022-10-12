<div class=" p-10">
  <div class="bg-white p-5">
    <div class="flex space-x-2 justify-end">
      <a href="index.php" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
    </div>
    <h3 class="text-lg mt-4 text-center">tổng tiền : <?= $row_order['total'] ?></h3>
    <h3 class="text-lg mt-4 text-center">Giá lúc mua: <?= $row_order['unit_price'] ?></h3>
    <table class="min-w-full border text-center">
      <thead class="border-b">
        <tr>
          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
            #
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
            tên sản phẩm
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
            Đơn giá
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
            số lượng
          </th>
          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
            tổng giá
          </th>

        </tr>
      </thead>
      <tbody>
        <?php if (count($rows) == 0) : ?>
          <p>Chưa có dữ liệu</p>
        <?php else : ?>
          <?php foreach ($rows as $row) : ?>
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r"><?= $row['id'] ?? "" ?></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                <?= $row['product_name'] ?? "" ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                <?= $row['product_price'] ?? "" ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                <?= $row['quantity'] ?? "" ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                <?= $row['product_price'] * $row['quantity'] ?>
              </td>



            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>


  </div>
</div>