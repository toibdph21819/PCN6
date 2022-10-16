<div class="flex space-x-2 justify-end mr-10 mt-5">
  <a href="index.php?thanhtoan" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
</div>
<form class="mx-auto w-96 p-5" action="index.php?recipients" method="post">
  <input class="w-full p-2 px-4 mt-3" type="text" name="name" placeholder="nhập tên">
  <div><?= $err['name'] ?? '' ?></div>
  <br>
  <input class="w-full p-2 px-4 mt-3" type="number" name="phone" placeholder="nhập số điện thoại">
  <div><?= $err['phone'] ?? '' ?></div>
  <br>
  <textarea class="w-full p-2 px-4 mt-3" name="address" id="" cols="30" rows="10">nhập địa chỉ</textarea>
  <div><?= $err['address'] ?? '' ?></div>
  <br>
  <button class="p-2 mt-3 px-5 bg-primary mx-auto" name="submit">gửi</button>
</form>
<div class="bg-white flex justify-center">
  <div class="flex flex-col p-10">
    <h2 class="text-xl text-center">Danh sách người nhậm</h2>

    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">

        <div class="overflow-hidden">
          <table class="min-w-full border text-center">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  tên
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  số điện thoại
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  địa chỉ
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 border-r py-4">
                  Thao tác
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if (count($rows) == 0) : ?>
                <td colspan="4">Chưa có dữ liệu</td>
              <?php else : ?>
                <?php foreach ($rows as $row) : ?>
                  <tr class="border-b">

                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['name'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['phone'] ?? "" ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['address'] ?? "" ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r space-x-2">
                      <a href="index.php?recipients&delete&id=<?= $row['id'] ?? "" ?>" class="underline text-primary" onclick="return confirm('Chắc chưa')">xoá</a>
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