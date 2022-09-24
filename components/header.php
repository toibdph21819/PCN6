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

<body class="capitalize bg-[#f1f1f1]">
  <div class="">
    <header class="bg-primary  top-0 left-0 right-0 fixed z-50">
      <div class=" ">
        <div class="mx-auto w-[1060px] flex h-24 justify-between items-center">
          <div class="text-3xl">LOGO</div>
          <div class="">
            <form action="" class="relative">
              <input class="h-9 rounded-l-2xl border-0 w-64 outline-none px-3 text-sm" type="text" name="search">
              <button class="h-9 absolute rounded-r-2xl bg-white px-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
          <nav>
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