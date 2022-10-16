<div class="w-full container mx-auto py-10 px-10">
  <h2 class="text-2xl text-center mb-5">Kết quả tìm kiếm cho Sản phẩm </h2>
  <div class=" grid grid-cols-5 gap-2.5">
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