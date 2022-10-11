<div class="bg-white flex justify-center">
  <div class="flex flex-col p-10">
    <h2 class="text-xl text-center">Danh sách người dùng</h2>

    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">

        <div class="overflow-hidden">
          <table class="min-w-full border text-center">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 py-4 border-r">
                  #
                </th>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 py-4 border-r">
                  tên
                </th>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 border-r py-4">
                  email
                </th>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 border-r py-4">
                  avatar
                </th>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 border-r py-4">
                  quyền
                </th>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 border-r py-4">
                  phone
                </th>
                <th scope="col" class="text-xs font-medium text-gray-900 px-6 border-r py-4">
                  được tạo vào lúc
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if (count($rows) == 0) : ?>
                <p>Chưa có dữ liệu</p>
              <?php else : ?>
                <?php foreach ($rows as $row) : ?>
                  <tr class="border-b">
                    <td class="p-2 whitespace-nowrap text-xs font-medium text-gray-900 border-r"><?= $row['id'] ?? "" ?></td>
                    <td class="text-xs text-gray-900 font-light p-2 whitespace-nowrap border-r">
                      <?= $row['name'] ?? "" ?>
                    </td>
                    <td class="text-xs text-gray-900 font-light p-2 whitespace-nowrap border-r lowercase">
                      <?= $row['email'] ?? "" ?>
                    </td>
                    <td class="text-xs text-gray-900 font-light p-2  whitespace-nowrap border-r">
                      <img src="<?= $row['avatar'] == '' ?  "$CONTENT_URL/images/" . "avatardefault.png" :  "$CONTENT_URL/images/" . $row['avatar'] ?>" class="w-8 h-8 rounded-full mx-auto " alt="">
                    </td>
                    <td class="text-xs text-gray-900 font-light p-2 whitespace-nowrap border-r">
                      <?= $row['admin'] == 0 ? 'khách hàng' : 'quản trị' ?? "" ?>
                    </td>
                    <td class="text-xs text-gray-900 font-light p-2 whitespace-nowrap border-r">
                      <?= $row['phone'] ?? "" ?>
                    </td>
                    <td class="text-xs text-gray-900 font-light p-2 whitespace-nowrap border-r">
                      <?= $row['created_at'] ?? "" ?>
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