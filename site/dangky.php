<div class="w-full mx-auto">
    <div class="grid md:grid-cols-2">
        <div class="px-5 border bg-white py-10">
            <h2 class="mt-5 text-center text-2xl mb-3">Tạo tài khoản của bạn</h2>
            <div class="flex justify-center mb-3">
                <p class="">đã có tài khoản?</p>
                <a class="underline text-primary" href="<?= $SITE_URL ?>/?dangnhap">Đăng nhập</a>
            </div>
            <form action="" class="mt-5 mx-auto px-2 sm:px-10 lg:px-20">
                <div class="mt-4 space-y-3 ">
                    <label for="name">Tên đăng nhập</label>
                    <div><input type="text" name="name" placeholder="Nhập tên" class="p-2 border shadow-sm rounded-md h-10 w-full"></div>
                </div>

                <div class="mt-4 space-y-3 ">
                    <label for="email">Email</label>
                    <div><input type="text" name="email" value="" placeholder="@gmail.com" class="p-2 border shadow-sm rounded-md h-10 w-full"></div>
                </div>

                <div class="mt-4 space-y-3 ">
                    <label for="phone">SĐT</label>
                    <div><input type="number" name="phone" value="" placeholder="0123456xxx" class="p-2 border shadow-sm rounded-md h-10 w-full"></div>
                </div>

                <div class="mt-4 space-y-3 ">
                    <label for="password">Mật khẩu</label>
                    <div><input type="text" name="password" value="" placeholder="*********" class="p-2 border shadow-sm rounded-md h-10 w-full"></div>
                    <span class="text-xs text-gray-400">Mật khẩu phải có ít nhất 6 kí tự</span>
                </div>
                <div class="mt-4 space-y-3 ">
                    <label for="password">Nhập lại mật khẩu</label>
                    <div><input type="text" name="password" value="" placeholder="*********" class="p-2 border shadow-sm rounded-md h-10 w-full"></div>
                </div>
                <div class="text-center w-full sm:w-1/2 mx-auto mt-5">
                    <input type="submit" value="Đăng ký" class="transition-colors w-full py-2 rounded-md bg-primary hover:bg-transparent cursor-pointer hover:text-black text-white border-primary border">
                </div>
                <div class="text-center w-full sm:w-1/2 mx-auto mt-5">
                    <a href="<?= $SITE_URL ?>" class="transition-colors block w-full py-2 rounded-md border-primary border hover:bg-primary hover:text-white">Trở về</a>
                </div>
            </form>
        </div>
        <div class="md:grid md:grid-rows-2 md:mx-auto hidden translate-y-20">
            <div>
                <img src="<?= $CONTENT_URL ?>/images/a2.jpg" alt="" width="350px" height="240" style="">
            </div>
            <div>
                <img src="<?= $CONTENT_URL ?>/images/a2.jpg" alt="" width="350px" height="240">
            </div>
        </div>
    </div>

</div>