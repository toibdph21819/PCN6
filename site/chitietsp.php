<div class="w-full py-5 container mx-auto space-y-10 px-2 sm:px-5">
  <div class="  mx-auto bg-white p-5">
    <div class="sm:grid md:grid-cols-2 gap-5">
      <div class="flex flex-col space-y-1">
        <div class="w-full h-60 overflow-hidden">
          <img src="<?= $CONTENT_URL ?>/images/<?=
                                                $product_img[0]['image'] ?? "" ?>" alt="" class="transition-transform hover:scale-110 w-full h-full object-cover">
        </div>
        <div class="grid grid-cols-4 gap-1">
          <?php foreach ($product_img as $img) : ?>
            <div class="overflow-hidden "><img class="transition-transform object-center hover:scale-110 w-full h-14" src="<?= $CONTENT_URL ?>/images/<?= $img['image'] ?>" alt=""></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="text-center md:text-left">
        <h2 class="text-base sm:text-xl text-center md:text-left">
          <?= $product['name'] ?>
        </h2>
        <div class=" grid grid-cols-2 mt-4 text-xs sm:text-base">
          <p>Đánh giá: <?= $reviews['quantity'] ?></p>
          <p>số lương đã bán: <?= $product['saleable'] ?></p>
          <p>lượt xem: <?= $product['views'] ?></p>
        </div>
        <div class="text-red-500 font-bold mt-4 ">giá:<?= $product['price'] . " -" . ($product['voucher_discount'] ?? '0') ?></div>
        <div class="text-red-500 font-bold mt-4">giảm còn:<?= $product['price'] - ($product['voucher_discount'] ?? '0') ?></div>
        <form action="index.php?ctsp&id=<?= $product['id'] ?>" method="post">
          <div class="mt-4 ">
            <span>Phân loại:</span>
            <div class="flex space-x-2 flex-wrap justify-center md:justify-start text-sm gap-y-2">
              <?php
              foreach ($rows_type as  $type) : ?>
                <input type="radio" name="type_id" id="" value="<?= $type['type_id'] ?>|<?= $type['quantity'] ?>"><?= $type['name'] ?? '' ?> <?= $type['quantity'] ?>
              <?php endforeach; ?>
              <div class="text-red-500"><?= $err['type_id'] ?? '' ?></div>
            </div>
          </div>
          <div class="sm:flex space-y-2 sm:space-y-0 mt-5 justify-center md:justify-start text-xs sm:text-base">
            <div class="mr-2 ">số lượng: </div>
            <div class="sm:w-40 flex justify-center mx-14">
              <button type="button" class="prevNumberProduct w-8 sm:w-1/3 border-2 border-black border-r-0 translate-x-1 rounded-l-[3px]">-</button>
              <input type="text" class="inputNumberProduct w-8  sm:w-1/3 appearance-none  outline-none border-2 border-black m-0 text-center" value="1" name="numberProduct" id="">
              <button type="button" class="nextNumberProduct w-8  sm:w-1/3 border-2 border-black border-l-0 -translate-x-1 rounded-r-[3px]">+</button>
            </div>
            <div class="text-red-500"><?= $err['numberProduct'] ?? '' ?></div>
          </div>
          <div class="mt-10 mx-auto w-40">
            <button class="w-full h-11 bg-primary rounded-md text-white" name="add_product" type="submit">Thêm vào giỏ hàng</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="w-full mx-auto bg-white p-5 ">
    <h2 class="font-bold text-base sm:text-2xl">Mô tả </h2>
    <p class="mt-5 sm:text-base text-xs whitespace-pre-wrap leading-8">
      <?= $product['description'] ?>
    </p>
  </div>
  <div class="w-full mx-auto bg-white p-5 ">
    <h2 class="font-bold text-base sm:text-2xl">Bình luận</h2>
    <div class="showCreateComment underline cursor-pointer text-primary mt-5 text-sm sm:text-base">Thêm Bình luận</div>
    <div class="mt-5 hidden createComment">
      <form action="index.php?ctsp&id=<?= $product['id'] ?>" method="post">
        <div class="flex space-x-2">
          <div>Đánh giá:</div>
          <div class="flex flex-row-reverse justify-end">
            <input type="radio" name="star" class="hidden peer" value="5" id="star-5">
            <label for="star-5" class="peer-hover:text-yellow-500 text-gray-300 peer-checked:text-yellow-500">
              <i class="fa-solid fa-star border-1"></i>
            </label>
            <input type="radio" name="star" class="hidden peer" value="4" id="star-4">
            <label for="star-4" class="peer-hover:text-yellow-500 text-gray-300 peer-checked:text-yellow-500">
              <i class="fa-solid fa-star border-1"></i>
            </label>
            <input type="radio" name="star" class="hidden peer" value="3" id="star-3">
            <label for="star-3" class="peer-hover:text-yellow-500 text-gray-300 peer-checked:text-yellow-500">
              <i class="fa-solid fa-star border-1"></i>
            </label>
            <input type="radio" name="star" class="hidden peer" value="2" id="star-2">
            <label for="star-2" class="peer-hover:text-yellow-500 text-gray-300 peer-checked:text-yellow-500">
              <i class="fa-solid fa-star border-1"></i>
            </label>
            <input type="radio" name="star" class="hidden peer" value="1" id="star-1">
            <label for="star-1" class="peer-hover:text-yellow-500 text-gray-300 peer-checked:text-yellow-500">
              <i class="fa-solid fa-star border-1"></i>
            </label>
          </div>
        </div>
        <div class="my-8">
          <label class="block text-gray-700  mb-3" for="">
            Hãy viết bình luận của bạn
          </label>
          <textarea class="w-full border-2 rounded-lg p-3" name="comment" id="" cols="30" rows="6"></textarea>
        </div>
        <div class="flex space-x-3">
          <div class="cursor-pointer hideCreateComment text-primary rounded-md px-4 py-2 bg-white border">Trở về</div>
          <button type="submit" name="submit" class="text-white bg-primary rounded-md px-4 py-2">Gửi</button>
        </div>
      </form>
    </div>
    <div>
      <?php foreach ($rows_rv as $row) : ?>
        <div class="mt-5">
          <div class="flex gap-5">
            <div class="rounded-full h-10 w-10 overflow-hidden">
              <img class="w-full h-full" src="<?= $CONTENT_URL ?>/images/a1.jpg" alt="">
            </div>
            <div class="text-xs md:text-base">
              <p><?= $row['name'] ?>
              </p>
              <div>
                <?php
                if (floor($row['stars']) == 5) {
                  echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>';
                } elseif (floor($row['stars']) == 4) {
                  echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid fa-star"></i>';
                } elseif (floor($row['stars']) == 3) {
                  echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>';
                } elseif (floor($row['stars']) == 2) {
                  echo '   <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid text-yellow-400 fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>';
                } elseif (floor($row['stars']) == 1) {
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
              <p><?= $row['created_at'] ?></p>
            </div>
          </div>
          <div class="mt-5 text-xs sm:text-base">
            <?= $row['comment'] ?>
          </div>
        </div>
      <?php endforeach ?>
    </div>

  </div>
  <div>
    <h2 class="text-2xl text-center mb-5">Sản phẩm liên quan</h2>
    <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 lg:grid-cols-5 gap-1 sm:gap-2.5">
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
<script src="./chitietsp.js"></script>