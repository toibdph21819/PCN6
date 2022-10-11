<div class="bg-white p-5 min-h-[100vh] mx-auto flex justify-center">
  <div class="flex flex-col gap-10 mx-auto">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="flex space-x-2 justify-end">
          <a href="index.php" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
        </div>
        <div class="overflow-hidden mt-3">

          <table class="min-w-full border text-center">
            <thead class="border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  #
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  tên loại
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  số lượng sản phẩm
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                  Thao tác
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if (count($rows) == 0) : ?>
                <tr>
                  <td colspan="4">Chưa có gì cả</td>
                </tr>
              <?php else : ?>

                <?php foreach ($rows as $row) : ?>
                  <tr class="border-b">
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['id'] ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['name'] ?>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                      <?= $row['quantity'] ?>
                    </td>
                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap border-r">
                      <a class="text-red-600" href="index.php?delete-link-to-type&id=<?= $row['id'] ?>&product_id=<?= $get_id ?>">Xoá</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="block p-6 rounded-lg shadow-2xl bg-white max-w-sm">
      <form method="post" action="index.php?add-link-to-type&id=<?= $get_id ?>">
        <div class="form-group mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            loại
          </label>
          <div class="relative">
            <select name="type_id" class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option value="">Chọn trường</option>
              <?php foreach ($types as $type) : ?>
                <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
              <?php endforeach; ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <i class="fa-solid fa-caret-down"></i>
            </div>
            <p class=" text-xs italic error text-red-600"><?= $err['type_id'] ?? '' ?></p>
          </div>
        </div>
        <div class="form-group mb-6">
          <label for="quantity" class="form-label inline-block mb-2 text-gray-700">số lượng</label>
          <input name="quantity" type="number" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="quantity" placeholder="">
          <p class=" text-xs italic error text-red-600"><?= $err['quantity'] ?? '' ?></p>

        </div>

        <button type="submit" name="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Thêm</button>

      </form>
    </div>
  </div>
</div>