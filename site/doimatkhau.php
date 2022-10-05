<div class="w-full px-5 mx-auto flex  justify-center py-5 bg-slate-700">
  <div class=" p-5">
    <h2 class="text-2xl text-center mb-10 text-white">Đổi mật khẩu</h2>
    <div class="shadow-md p-7 rounded-md bg-white">
      <form class="" action="">
        <div class="mt-4 space-y-3">
          <label for="name">email</label>
          <input type="text" name="name" placeholder="Nhập email" class="p-2 border shadow-sm rounded-md h-10 w-full">
        </div>
        <div class="mt-4 space-y-3">
          <label for="name">mật khẩu cũ</label>
          <input type="text" name="name" placeholder="Nhập mật khẩu cũ" class="p-2 border shadow-sm rounded-md h-10 w-full">
        </div>
        <div class="mt-4 space-y-3">
          <label for="name">mật khẩu mới</label>
          <input type="number" name="name" placeholder="Nhập mật khẩu mới" class="p-2 border shadow-sm rounded-md h-10 w-full">
        </div>

        <div class="text-center w-full  mx-auto mt-5">
          <input type="submit" value="Gửi" class="transition-colors w-full py-2 rounded-md bg-primary hover:bg-transparent cursor-pointer hover:text-black text-white border-primary border">
        </div>
        <div class="text-center w-full  mx-auto mt-5">
          <a href="<?= $SITE_URL ?>" class="transition-colors block w-full py-2 rounded-md border-primary border hover:bg-primary hover:text-white">Trở về</a>
        </div>

      </form>
    </div>
  </div>

</div>