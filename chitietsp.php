<?php include_once './public/layout/header.php'; ?>
<div class="w-full grid gap-y-20 px-10">
  <div class="  mx-auto bg-white p-5">
    <div class="grid grid-cols-2 gap-5">
      <div class="flex flex-col">
        <div class="w-full h-60 overflow-hidden">
          <img src="./public/asset/a1.jpg" alt="" class="transition-transform hover:scale-110 w-full h-full object-cover">
        </div>
        <div class="grid grid-cols-4 gap-1">
          <div class="overflow-hidden "><img class="transition-transform hover:scale-110 w-full" src="./public/asset/abc.png" alt=""></div>
          <div class="overflow-hidden "><img class="transition-transform hover:scale-110 w-full" src="./public/asset/abc.png" alt=""></div>
          <div class="overflow-hidden "><img class="transition-transform hover:scale-110 w-full" src="./public/asset/abc.png" alt=""></div>
          <div class="overflow-hidden "><img class="transition-transform hover:scale-110 w-full" src="./public/asset/abc.png" alt=""></div>
        </div>
      </div>
      <div class="">
        <h2 class="text-xl">
          Laptop Toshiba Portégé X30-D i5-7300u /Ram 8G/ SSD 256G/ màn 13,3 FHD - Bảo hành 6 tháng
        </h2>
        <div class="grid grid-cols-2 mt-4">
          <p>Đánh giá: 100</p>
          <p>số lương đã bán: 10</p>
          <p>lượt xem: 1000</p>
        </div>
        <div class="text-red-500 font-bold mt-4">giá: 26.000.000</div>
        <div class="mt-4 ">
          <span>Phân loại:</span>

          <form action="" method="post">
            <div class="flex space-x-2 flex-wrap">
              <button class="px-2 border rounded-sm border-4" type="button" value="id1" name="id">ram 9gb</button>
              <button class="px-2 border rounded-sm" type="button" value="id2" name="id">ram 9gb</button>
              <button class="px-2 border rounded-sm" type="button" value="id3" name="id">ram 9gb</button>
              <button class="px-2 border rounded-sm" type="button" value="id4" name="id">ram 9gb</button>
            </div>
          </form>
        </div>
        <div class="flex mt-5">
          <div class="mr-2">số lượng</div>
          <div class="w-40 flex mx-14">
            <button type="button" class="prevNumberProduct w-1/3 border-2 border-black rounded-l-[3px]">-</button>
            <input type="text" class="inputNumberProduct w-1/3 appearance-none  outline-none border-2 border-black m-0 text-center" value="1" name="numberProduct" id="">
            <button type="button" class="nextNumberProduct w-1/3 border-2 border-black rounded-r-[3px]">+</button>
          </div>
          <div>Kho: 200</div>
        </div>
        <div class="mt-10 mx-auto w-40">
          <button class="w-full h-11 bg-primary rounded-md text-white" type="submit">Thêm vào giỏ hàng</button>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full mx-auto bg-white p-5 ">
    <h2 class="font-bold text-2xl">Mô tả </h2>
    <p class="mt-5 whitespace-pre leading-8">
      Máy tính cấu hình phù hợp mọi Game thủ chiến mượt LOL, đột kích ,truy kích, free fire
      Chạy bền bỉ, ổn định, giá tiền phù hợp
      Cấu hình chi tiết
      - main chipset H61 Hỗ trợ chip intel sk 1151 i7 3770 , i5 3470 , i3
      - CPU i5 3470/3450/3330 Bộ nhớ đệm (Cache) 3MB.Công nghệ chế tạo 32nm.Số lõi 4.Số luồng 4 Tốc độ 3.1 GHz.
      - Ram 8gb kington, gkill , kingmax bus1333, 1600
      - SSd ( ổ cứng ) 160g mới chính hãng tốc độc đọc /ghi 400 Mb/400Mb vào win nhanh 1 2s
      - Card vga 630 2g tùy kho chiến game cực tốt .Hiện giờ shop mình còn gt 710 1g oc ram lên 3g ngang vga 630 2g
      lưu ý : vỏ thùng bên ngoài thay đổi mẫu theo tùy đợt hàng
      BỘ MÁY TÍNH BAO GỒM :
      1 cây vỏ game led MỚI FULL HỘP 100% ,
      1 màn hình led 19 ich cũ , hoặc 24 ich
      1 bộ phím chuột MỚI , dây cáp kêt nối
      Tặng kèm 10m dây mạng ,hoặc 1 usb thu wifi
      Chính sách đổi luôn 30 ngày đầu nếu sp lỗi , đền tặng 300 nghìn nếu 3 ngày đầu sp lỗi
    </p>
  </div>
  <div class="w-full mx-auto bg-white p-5 ">
    <h2 class="font-bold text-2xl">Bình luận</h2>
    <div class="showCreateComment underline cursor-pointer text-primary mt-5">Thêm Bình luận</div>
    <div class="mt-5 hidden createComment">
      <form action="" method="post">
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
          <textarea class="w-full border-2 rounded-lg p-3" name="" id="" cols="30" rows="6"></textarea>
        </div>
        <div class="flex space-x-3">
          <div class="cursor-pointer hideCreateComment text-primary rounded-md px-4 py-2 bg-white border">Trở về</div>
          <button type="submit" class="text-white bg-primary rounded-md px-4 py-2">Gửi</button>
        </div>
      </form>
    </div>
    <div class="mt-5">
      <div class="flex gap-5">
        <div class="rounded-full h-10 w-10 overflow-hidden">
          <img class="w-full h-full" src="./public/asset/a1.jpg" alt="">
        </div>
        <div>
          <p>nguyễn văn a
          </p>
          <div>
            <i class="fa-solid text-yellow-400 fa-star"></i>
            <i class="fa-solid text-yellow-400 fa-star"></i>
            <i class="fa-solid text-yellow-400 fa-star"></i>
            <i class="fa-solid text-yellow-400 fa-star"></i>
            <i class="fa-solid text-yellow-400 fa-star"></i>
          </div>
          <p>20-10-2022</p>
        </div>
      </div>
      <div class="mt-5 ">
        Đây là sản phẩm phù hợp với tối
      </div>
    </div>

  </div>
  <div>
    <h2 class="text-2xl text-center mb-5">Sản phẩm liên quan</h2>
    <?php include './components/products.php'; ?>
  </div>
</div>
<script src="./chitietsp.js"></script>
<?php include_once './public/layout/footer.php'; ?>