<?php include_once './public/layout/header.php' ?>
<div class="w-full px-10 ">
  <div class="flex gap-1">
    <div class="w-2/3 max-h-60">
      <img class="w-full h-full" src="./public/asset/a1.jpg" alt="">
    </div>
    <div class="w-1/3 grid max-h-60 grid-rows-2 gap-1">
      <img class="w-full h-full" src="./public/asset/a1.jpg" alt="">
      <img class="w-full h-full" src="./public/asset/a1.jpg" alt="">
    </div>
  </div>

  <div class="w-full  mt-5 rounded-2xl px-5 py-3  bg-[#e0e0e0] flex flex-wrap gap-3">
    <a href="" class="border-transparent border-2 hover:border-primary w-32 text-center bg-white rounded-l-full rounded-r-full">
      <img src="./public/asset/apple.png" class="h-10  mx-auto" alt="">
    </a>
    <a href="" class="border-transparent border-2 hover:border-primary w-32 text-center bg-white rounded-l-full rounded-r-full">
      <img src="./public/asset/hp.png" class="h-10  mx-auto" alt="">
    </a>
    <a href="" class="border-transparent border-2 hover:border-primary w-32 text-center bg-white rounded-l-full rounded-r-full">
      <img src="./public/asset/assus.png" class="h-10 object-contain mx-auto" alt="">
    </a>

  </div>
  <div class="w-full px-5 py-3 mt-5">
    <div class="flex flex-wrap">
      <a href="" class="w-32 text-center">
        <img src="./public/asset/a1.jpg" class="w-16 h-16 rounded-full mx-auto" alt="">
        <div class="text-sm">Học tập, văn phòng</div>
      </a>
      <a href="" class="w-32 text-center">
        <img src="./public/asset/a1.jpg" class="w-16 h-16 rounded-full mx-auto" alt="">
        <div class="text-sm">gaming</div>
      </a>
      <a href="" class="w-32 text-center">
        <img src="./public/asset/a1.jpg" class="w-16 h-16 rounded-full mx-auto" alt="">
        <div class="text-sm">Macbook</div>
      </a>
    </div>
  </div>

  <div>
    <h2 class="text-2xl text-center mb-5">Laptop bán chạy</h2>
    <?php include './components/products.php' ?>

  </div>
</div>
<?php include_once './public/layout/footer.php' ?>