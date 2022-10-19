<div class="flex flex-col container mx-auto">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full border text-center">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                Mã hoá đơn
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                Thời gian tạo
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                Số lượng mặt hàng
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Tổng giá
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Chi tiết
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($orders as $order) : ?>
              <tr class="border-b">
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                  <?= $order['id'] ?? '' ?>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                  <?= $order['created_at'] ?>
                </td>

                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                  <?php $count = order_detail_select_count_by_order($order['id']);
                  echo $count['count'] ?>
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                  <?= $order['total'] ?>
                </td>
                <td class="text-sm px-6 py-4 whitespace-nowrap border-r">
                  <a class="text-primary underline" href="index.php?detail_order&id=<?= $order['id'] ?>">xem</a>
                </td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>