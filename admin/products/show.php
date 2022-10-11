<div class=" p-10">
  <div class="bg-white p-5">
    <div class="flex space-x-2 justify-end">
      <a href="index.php" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
    </div>
    <h3 class="text-lg mt-4 text-center">Tên sản phẩm : <?= $row['name'] ?></h3>
    <p class="text-xs">Mô tả: <span><?= $row['description'] ?></span></p>
    <h2>Hình ảnh:</h2>
    <div class="flex gap-2 flex-wrap justify-center">
      <?php foreach ($image_product as $image) : ?>
        <img width="200" class="mt-3" src="<?= $CONTENT_URL ?>/images/<?= $image['image'] ?>" alt="">
      <?php endforeach; ?>
    </div>
    <p>Giá: <span class="lowercase">đ</span><?= $row['price'] ?></p>
    <?php foreach ($rows_types as $item) : ?>
      <div>
        <div class="mt-2.5 inline-block text-xs border-slate-400 border px-1">
          <?= $item['name'] ?>
        </div>
        Còn <?= $item['quantity'] ?> sản phẩm
      </div>
    <?php endforeach; ?>
    <p>Sản phẩm đặc biệt: <?= $row['featured'] == 1 ? "Đúng" : "Không" ?></p>
    <p>Lượt xem: <?= $row['views'] ?></p>
    <p>Sản phẩm Còn bán: <?= $row['active'] == 1 ? "Còn" : "Không" ?></p>
    <p>Đã bán được: <?= $row['saleable'] ?></p>
    <p>Thuộc danh mục: <?= $row_cate['name'] ?></p>
    <p>Thuộc hãng: <?= $row_brand['name'] ?></p>
    <p>Tên voucher <?= $row_voucher['name'] ?>: giảm <?= $row_voucher['discount'] ?>% <span>Hạn: <?= date('Y-m-d', strtotime($row_voucher['due'])) ?> </span></p>
    <p>Được cập nhật lúc: <?= $row['created_at'] ?></p>
  </div>
</div>