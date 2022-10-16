<div class="w-full mx-auto container py-5 px-2 sm:px-10">
  <div class="flex md:flex-row flex-col gap-1">
    <input type="hidden" name="" class="a" value="<?= $features ?>">
    <div class="relative md:w-2/3 w-full max-h-60 h-60">
      <a href="index.php?ctsp&id=<?= $features[0]['product_id'] ?>" class="img-link">
        <img id="image" class="w-full h-full" src="<?= $CONTENT_URL ?>/images/<?= $features[0]['image'] ?>" alt="">
      </a>
    </div>
    <div class="md:w-1/3 w-full  grid max-h-60 md:grid-cols-none grid-cols-2 md:grid-rows-2 gap-1">
      <a href="index.php?ctsp&id=<?= $features[1]['product_id'] ?>" class="img-link">
        <img id="image" class="w-full h-full" src="<?= $CONTENT_URL ?>/images/<?= $features[1]['image'] ?>" alt="">
      </a>
      <a href="index.php?ctsp&id=<?= $features[2]['product_id'] ?>" class="img-link">
        <img id="image" class="w-full h-full" src="<?= $CONTENT_URL ?>/images/<?= $features[2]['image'] ?>" alt="">
      </a>
    </div>
  </div>

  <div class="w-full  mt-5 rounded-2xl px-5 py-3  bg-[#e0e0e0] flex flex-wrap gap-3">
    <?php foreach ($rows_brand as  $brand) : ?>
      <a href="index.php?products&brand_id=<?= $brand['id'] ?>" class="border-transparent border-2 hover:border-primary w-32 text-center bg-white rounded-l-full rounded-r-full">
        <img src="<?= $CONTENT_URL ?>/images/<?= $brand['image']  ?>" class="h-10  mx-auto" alt="">
      </a>
    <?php endforeach ?>
  </div>
  <div class="w-full px-5 py-3 mt-5">
    <div class="flex flex-wrap space-x-4">
      <?php foreach ($rows_cate as  $cate) : ?>
        <a href="index.php?products&cate_id=<?= $cate['id'] ?>" class="text-center">
          <img src="<?= $CONTENT_URL ?>/images/<?= $cate['image'] ?>" class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-full mx-auto" alt="">
          <div class="text-xs sm:text-sm"><?= $cate['name'] ?></div>
        </a>
      <?php endforeach ?>
    </div>
  </div>

  <div>
    <h2 class="text-2xl text-center mb-5">Laptop bán chạy</h2>
    <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 lg:grid-cols-5 gap-2.5">
      <?php foreach ($rows_product as  $product) : ?>
        <a href="index.php?ctsp&id=<?= $product['id'] ?>" class="p-2.5  text-xs sm:text-sm bg-white shadow-lg">
          <img class="w-full transition-transform  hover:-translate-y-2 max-h-36 object-cover min-h-[100px]" src="<?= $CONTENT_URL ?>/images/<?php $product_img = product_image_select_by_product($product['id']);
                                                                                                                                              echo $product_img[0]['image'] ?? ""                                                        ?>" alt="">
          <h3 class="mt-2.5 ">
            <?= $product['name'] ?>
          </h3>
          <div>

            <?php
            $rows_type =  product_type_select_by_type($product['id']);
            foreach ($rows_type as  $type) : ?>
              <div class="mt-2.5 inline-block text-xs border-slate-400 border px-1">
                <?= $type['name'] ?? '' ?>
              </div>
              <?= $type['quantity'] ?>
            <?php endforeach; ?>
          </div>
          <div class="mt-2.5">
            <div>Giá <?= $product['price'] ?> <span>giảm giá : <?= $product['voucher_discount'] ?? '0' ?></span></div>
            <div><?= $product['price'] - ($product['voucher_discount'] ?? '0') ?></div>
          </div>
          <div class="mt-2.5 flex space-x-2">
            <div>
              <!-- kiểm tra phần rating bằng switch case nếu value =4 thì 4 sao có class yellow -->
              <?php $star = reviews_select_avg($product['id']);
              if (floor($star['avg_star']) == 5) {
                echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>';
              } elseif (floor($star['avg_star']) == 4) {
                echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid fa-star"></i>';
              } elseif (floor($star['avg_star']) == 3) {
                echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>';
              } elseif (floor($star['avg_star']) == 2) {
                echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>';
              } elseif (floor($star['avg_star']) == 1) {
                echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>';
              } else {
                echo '   
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>';
              }
              ?>

            </div>
            <div class=""><?= $star['quantity'] ?></div>
          </div>
          <div class="mt-2.5">
            Lượt mua: <?= $product['saleable'] ?? '0' ?>
          </div>
          <div class="mt-2.5 ">
            <?= $product['description'] ?>
          </div>
        </a>
      <?php endforeach ?>
    </div>
  </div>
</div>