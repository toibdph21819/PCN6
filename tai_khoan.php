<?php include_once './components/header.php' ?>
<div class="lg:w-[880px] w-full bg-white mx-auto py-5">
  <div class="ml-3 lg:ml-16">
    <h2 class="text-xl">hồ sơ của tôi</h2>
    <p class="text-[#989494]">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
  </div>
  <form action="">
    <div class="flex flex-col-reverse lg:flex-row ">
      <div class="w-full lg:w-1/2 pl-5 lg:pl-20 pr-5">
        <div class="my-8">
          <label class="block text-gray-700  mb-3" for="username">
            Tên
          </label>
          <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>
        <div class="mb-8">
          <label class="block text-gray-700  mb-3" for="username">
            email
          </label>
          <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>
        <div class="mb-8">
          <label class="block text-gray-700  mb-3" for="username">
            số điện thoại
          </label>
          <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>

        <div class="mb-8 relative ">
          <div class="flex justify-between mb-3 transition-all">
            <label class="block text-gray-700  " for="">
              Địa chỉ nhận hàng
            </label>
            <a class="text-[#024AD6] underline" href="">Thêm địa chỉ</a>
          </div>
          <select class="peer shadow appearance-none border h-12 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option>Chọn địa chỉ nhận hàng của bạn</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <div class=" absolute top-12 right-2 transition-transform"><i class="fa-solid fa-chevron-down"></i></div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 mt-10 ">
        <div class="w-40 h-40 mx-auto border-black border object-cover rounded-full overflow-hidden">
          <img class="w-full h-full" src="./asset/a1.jpg" alt="">
        </div>
        <div class="mt-6 mx-auto text-center">
          <input type="file" name="avatar" id="avatar" class="hidden">
          <label for="avatar" class="cursor-pointer rounded-lg px-12 py-2 border-2">Chọn ảnh</label>
        </div>
      </div>
    </div>
    <div class="px-3 sm:w-[340px] mx-auto mt-16">
      <button type="submit" class="rounded-2xl bg-primary w-full text-2xl text-white h-14 hover:border-2 hover:border-primary hover:text-primary hover:bg-white">Lưu</button>
    </div>
  </form>
</div>
<?php include_once './components/footer.php' ?>;