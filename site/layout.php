<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/output.css">

</head>

<body class="capitalize transition-all bg-[#f3f3f3]">
  <div class="">
    <header class="bg-primary">
      <div class=" ">
        <div class="mx-auto w-full px-10 flex h-24 justify-between items-center">
          <div class="text-3xl">LOGO</div>
          <div class="sm:block hidden">
            <form action="" class="relative">
              <input class="h-9 rounded-l-2xl border-0 w-64 outline-none px-3 text-sm" type="text" name="search">
              <button class="h-9 absolute rounded-r-2xl bg-white px-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
          <i class="fa-solid fa-bars menu-nav lg:hidden block p-3 cursor-pointer"></i>
          <nav class="hidden fixed top-0 left-0 right-0 bottom-0 z-30 bg-slate-600 menu-open">
            <div class="text-center pt-10">
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?trangchu">Trang chủ</a></div>
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?giohang">Giỏ hàng</a></div>
              <?php if (!get_cookie('user_id')) : ?>
                <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?dangky">Đăng ký</a></div>
                <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?dangnhap">Đăng nhập</a></div>
              <?php else : ?>
                <?php if (get_cookie('admin')) : ?>
                  <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $ADMIN_URL ?>">admin</a>
                <?php endif; ?>
                <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?phanhoi">phản hồi</a></div>
                <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?dangxuat">Đăng xuất</a></div>
              <?php endif; ?>
              <form action="" class="relative mt-4">
                <input class="h-9 rounded-l-2xl border-0 w-64 outline-none px-3 text-sm" type="text" name="search">
                <button class="h-9 absolute rounded-r-2xl bg-white px-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
              <div class="mt-5 menu-close"><i class="fa-solid fa-xmark text-xl text-white cursor-pointer"></i></div>
            </div>
          </nav>
          <nav class="lg:block hidden ">
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?trangchu">Trang chủ</a>
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?giohang">Giỏ hàng</a>
            <?php if (!get_cookie('user_id')) : ?>
              <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?dangky">Đăng ký</a>
              <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?dangnhap">Đăng nhập</a>
            <?php else : ?>
              <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?phanhoi">phản hồi</a>
              <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?taikhoan">tài khoản</a>
              <?php if (get_cookie('admin')) : ?>
                <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $ADMIN_URL ?>">admin</a>
              <?php endif; ?>
              <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="<?= $SITE_URL ?>?dangxuat">Đăng xuất</a>
            <?php endif; ?>
          </nav>
        </div>
      </div>
    </header>

    <!-- center -->
    <?php include $VIEW_NAME ?>


    <footer class="bg-primary">
      <div class="w-full py-10 pl-10 pr-16 xl:px-0  max-w-full mx-auto flex gap-10 flex-col sm:flex-row sm:justify-between sm:items-center">
        <div class="text-3xl text-center">LOGO</div>
        <div class="text-white text-center -translate-y-5">
          <div>Hỗ trợ</div>
          <div><a href="./index.php">phản hồi</a></div>
        </div>
        <div class="text-white text-center">
          <div>các trang</div>
          <div><a href="./index.php">Trang chủ</a></div>
          <div><a href="./index.php">sản phẩm</a></div>
          <div><a href="./index.php">Giỏ hàng</a></div>
        </div>
        <div class="text-white text-center -translate-y-4">
          <div>Tài khoản</div>
          <div><a href="./index.php">Đăng nhập</a></div>
          <div><a href="./index.php">Đăng ký</a></div>
        </div>
      </div>
    </footer>
  </div>
  <script>
    var menuNav = document.querySelector('.menu-nav');
    var openMenuNav = document.querySelector('.menu-open');
    var closeMenuNav = document.querySelector('.menu-close');
    menuNav.addEventListener('click', function(e) {
      openMenuNav.classList.add('block');
      openMenuNav.classList.remove('hidden');
    })
    closeMenuNav.onclick = () => {
      openMenuNav.classList.remove('block');
      openMenuNav.classList.add('hidden');
    }
  </script>
</body>

</html>