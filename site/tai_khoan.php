<div class="container py-10 w-full bg-white mx-auto ">
  <div class="ml-3 lg:ml-16">
    <h2 class="text-xl">hồ sơ của tôi</h2>
    <p class="text-[#989494]">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
  </div>
  <form action="index.php?taikhoan" method="post" enctype="multipart/form-data">
    <div class="flex flex-col-reverse lg:flex-row ">
      <div class="w-full lg:w-1/2 pl-5 lg:pl-20 pr-5">
        <div class="my-8">
          <label class="block text-gray-700  mb-3" for="username">
            Tên
          </label>
          <input value="<?= $row['name'] ?>" name="name" class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>
        <div class="mb-8">
          <label class="block text-gray-700  mb-3" for="">
            email
          </label>
          <input value="<?= $row['email'] ?>" name="email" class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text">
        </div>
        <div class="mb-8">
          <label class="block text-gray-700  mb-3" for="">
            số điện thoại
          </label>
          <input value="<?= $row['phone'] ?>" name="phone" class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="" type="text">
        </div>
      </div>
      <div class="w-full lg:w-1/2 mt-10 ">
        <div class="w-40 h-40 mx-auto border-black border object-cover rounded-full overflow-hidden">
          <input type="text" value="<?= $row['avatar'] ?? 'avatardefault.png' ?>" name="prev_img" id="" class="hidden">
          <img class="w-full h-full" src="<?= $CONTENT_URL ?>/images/<?= $row['avatar'] ?? 'avatardefault.png' ?>" alt="">
        </div>
        <div class="mt-6 mx-auto text-center">
          <input type="file" name="avatar" id="avatar" class="hidden">
          <label for="avatar" class="cursor-pointer rounded-lg px-12 py-2 border-2">Chọn ảnh</label>
        </div>
      </div>
    </div>
    <div class="px-3 sm:w-[340px] mx-auto mt-16">
      <button type="submit" name="submit" class="rounded-2xl bg-primary w-full text-2xl text-white h-14 hover:border-2 hover:border-primary hover:text-primary hover:bg-white">Lưu</button>
    </div>
  </form>
</div>