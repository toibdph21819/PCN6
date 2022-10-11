<div class=" p-10">
  <div class="bg-white p-5">
    <div class="flex space-x-2 justify-end">
      <a href="index.php" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
    </div>
    <h3 class="text-lg mt-4 text-center">Tên Người dùng : <?= $row['user_name'] ?></h3>
    <h3 class="text-lg mt-4 text-center">Tên sản phẩm : <?= $row['product_name'] ?></h3>
    <h3 class="text-lg mt-4 text-center">Số sao : <?= $row['stars'] ?></h3>
    <p class="text-sm">bình luận: <span><?= $row['comment'] ?></span></p>
    <p class="text-sm">Thời gian: <span><?= $row['created_at'] ?></span></p>

  </div>
</div>