<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#cf9d1c',
          }
        }
      }
    }
  </script>
</head>

<body class="capitalize transition-all bg-[#f1f1f1]">
  <div class="">
    <header class="bg-primary  top-0 right-0 left-0 sticky z-50">
      <div class=" ">
        <div class="mx-auto px-5 xl:px-0 w-full xl:w-[1060px] flex h-24 justify-between items-center">
          <div class="text-3xl">LOGO</div>
          <div class="sm:block hidden">
            <form action="" class="relative">
              <input class="h-9 rounded-l-2xl border-0 w-64 outline-none px-3 text-sm" type="text" name="search">
              <button class="h-9 absolute rounded-r-2xl bg-white px-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
          <i class="fa-solid fa-bars menu-nav lg:hidden block p-3 cursor-pointer"></i>
          <nav class="hidden fixed top-0 left-0 right-0 bottom-0 bg-slate-600 menu-open">
            <div class="text-center pt-10">
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Trang chủ</a></div>
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Sản phẩm</a></div>
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Giỏ hàng</a></div>
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">phản hồi</a></div>
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Đăng ký</a></div>
              <div class="mt-5"><a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Đăng nhập</a></div>
              <form action="" class="relative mt-4">
                <input class="h-9 rounded-l-2xl border-0 w-64 outline-none px-3 text-sm" type="text" name="search">
                <button class="h-9 absolute rounded-r-2xl bg-white px-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
              <div class="mt-5 menu-close"><i class="fa-solid fa-xmark text-xl text-white cursor-pointer"></i></div>
            </div>
          </nav>
          <nav class="lg:block hidden ">
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Trang chủ</a>
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Sản phẩm</a>
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Giỏ hàng</a>
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">phản hồi</a>
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Đăng ký</a>
            <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="./index.php">Đăng nhập</a>

          </nav>
        </div>
      </div>
    </header>
    <div class="mt-32">
    </div>