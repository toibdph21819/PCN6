<div class="bg-white p-5 min-h-[100vh] flex items-center">
  <form name="form" class="w-full  mx-auto p-5 rounded-md  border" enctype="multipart/form-data" action="index.php?insert" method="post">
    <div class="flex space-x-2 justify-end">
      <a href="index.php" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
    </div>
    <h2 class="text-xl text-center my-5">Thêm mới danh mục</h2>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
          tên danh mục
        </label>
        <input value="<?= $name ?? '' ?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" name="name" placeholder="">
        <p class="text-gray-600 text-xs italic">Tuỳ bạn đặt như nào thì đặt</p>
        <p class=" text-xs italic error text-red-600"><?= $err['name'] ?? '' ?></p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
          hình ảnh
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="images" type="file" name="image">
        <p class=" text-xs italic error text-red-600"><?= $err['image'] ?? '' ?></p>

      </div>
    </div>
    <div class="flex space-x-2 justify-center mt-4">
      <button type="submit" name="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Gửi đê</button>
    </div>
  </form>
</div>