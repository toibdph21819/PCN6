<div class="w-full px-5 mx-auto flex  justify-center py-5 bg-slate-700">
    <div class="p-5">
        <h2 class="text-2xl text-center mb-10 text-white">đăng nhập vào tài khoản của bạn</h2>
        <div class="shadow-md p-7 rounded-md bg-white">
            <div class="text-center mb-5">
                <h2>bạn đang Đăng nhập</h2>
                <b>Vào cửa hàng CDN6</b>
            </div>
            <form class="" method="post" action="index.php?dangnhap">
                <div>
                    <p class=" text-xs italic error text-red-600"><?= $err['user'] ?? '' ?></p>
                </div>
                <div class="mt-4 space-y-3">
                    <label for="name">email</label>
                    <input type="text" name="email" placeholder="Nhập email" class="p-2 border shadow-sm rounded-md h-10 w-full">
                    <p class=" text-xs italic error text-red-600"><?= $err['email'] ?? '' ?></p>
                </div>

                <div class="mt-4 space-y-3">
                    <label for="password">Mật khẩu</label>
                    <input type="text" name="password" placeholder="********" class="p-2 border shadow-sm rounded-md h-10 w-full">
                    <p class=" text-xs italic error text-red-600"><?= $err['password'] ?? '' ?></p>
                </div>

                <div class="text-center w-full  mx-auto mt-5">
                    <input type="submit" name="submit" value="Đăng nhập" class="transition-colors w-full py-2 rounded-md bg-primary hover:bg-transparent cursor-pointer hover:text-black text-white border-primary border">
                </div>
                <div class="text-center w-full  mx-auto mt-5">
                    <a href="<?= $SITE_URL ?>" class="transition-colors block w-full py-2 rounded-md border-primary border hover:bg-primary hover:text-white">Trở về</a>
                </div>
                <div class="">
                    <div class="flex justify-center w-full my-3">
                        <p>chưa có tài khoản?</p>
                        <a class="text-primary underline" href="<?= $SITE_URL ?>/?dangky">Đăng ký</a>
                    </div>
                    <p class="text-center">hoặc</p>
                    <div class="flex justify-center w-full my-3">
                        <a href="<?= $SITE_URL ?>/?quenmk" class="text-primary underline">Quên mật khẩu</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>