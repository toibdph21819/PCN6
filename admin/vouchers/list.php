<div class="bg-white flex justify-center">
  <div class="flex flex-col p-10">
    <h2 class="text-xl text-center">Danh sách mã giảm giá</h2>
    <div>
      <div class="flex space-x-2 justify-center">
        <a href="index.php?create" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Thêm mới</a>
      </div>
    </div>
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
                  tên
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  giảm
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  được tạo
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  hạn
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
                      <?= $row['name'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['discount'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['created_at'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['due'] ?? "" ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r space-x-2"><a href="index.php?edit&id=<?= $row['id'] ?? "" ?>" class="underline text-primary">sửa</a><a href="index.php?delete&id=<?= $row['id'] ?? "" ?>" class="underline text-primary" onclick="return confirm('Chắc chưa')">xoá</a></td>

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