<div class="bg-white flex justify-center">
  <div class="flex flex-col p-10">
    <h2 class="text-xl text-center">Danh sách mã giảm giá</h2>
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">

        <div class="overflow-hidden">
          <table class="min-w-full border text-center">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  #
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Tổng tiền
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  giá lúc đầu
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Thời gian
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  tin nhắn
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  chi tiết
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 border-r py-4">
                  Thao tác
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
                      <?= $row['total'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['unit_price'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['created_at'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['msg'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <a href="index.php?show&id=<?= $row['id'] ?? "" ?>" class="underline text-primary">xem</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r space-x-2">
                      <a href="index.php?delete&id=<?= $row['id'] ?? "" ?>" class="underline text-primary" onclick="return confirm('Chắc chưa')">xoá</a>
                    </td>

                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>