<footer class="bg-primary">
  <div class="w-[1060px] py-10 px-5 xl:px-0  max-w-full mx-auto flex gap-10 mt-52 flex-col sm:flex-row sm:justify-between sm:items-center">
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