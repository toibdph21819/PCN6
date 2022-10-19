<div class="w-full px-5 mx-auto flex  justify-center py-5 bg-slate-700">
  <div class="p-5">
    <h2 class="text-2xl text-center mb-10 text-white">đưa ra các ý kiến để chúng tôi có thể tốt hơn</h2>
    <div class="shadow-md p-7 rounded-md bg-white">
      <div class="text-center mb-5">
        <b class="text-xl">phản hồi</b>
      </div>
      <form class="" method="post" action="index.php?phanhoi">
        <div class="mt-4 space-y-3">
          <label for="">Tiêu đề</label>
          <input type="text" value="<?= $title ?? "" ?>" name="title" placeholder="Nhập Tiêu đề" class="p-2 border shadow-sm rounded-md h-10 w-full">
          <p class=" text-xs italic error text-red-600"><?= $err['title'] ?? '' ?></p>
        </div>

        <div class="mt-4 space-y-3">
          <label for="">tin nhắn tới quản trị</label>
          <textarea name="msg" id="" cols="" rows="3" class="p-2 border shadow-sm rounded-md  w-full"><?= $msg ?? "" ?></textarea>
          <p class=" text-xs italic error text-red-600"><?= $err['msg'] ?? '' ?></p>
        </div>
        <div class="text-center w-full mx-auto mt-5">
          <input type="submit" name="submit" value="Gửi đuê" class="transition-colors w-full py-2 rounded-md bg-primary hover:bg-transparent cursor-pointer hover:text-black text-white border-primary border">
        </div>
        <div class="text-center w-full  mx-auto mt-5">
          <a href="<?= $SITE_URL ?>" class="transition-colors block w-full py-2 rounded-md border-primary border hover:bg-primary hover:text-white">Trở về</a>
        </div>

      </form>
    </div>
  </div>

</div>