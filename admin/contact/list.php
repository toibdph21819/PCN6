<div class="bg-white flex justify-center">
  <div class="flex flex-col p-10">
    <h2 class="text-xl text-center">Danh sách phản hồi</h2>

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
                  email
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  tiêu đề
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 border-r py-4">
                  tin nhắn
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 border-r py-4">
                  Thao tác
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if (count($rows) == 0) : ?>
                <td colspan="6">Chưa có dữ liệu</td>
              <?php else : ?>
                <?php foreach ($rows as $row) : ?>
                  <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r"><?= $row['id'] ?? "" ?></td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['name'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['email'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['title'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['msg'] ?? "" ?>
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