<div class="bg-white p-5 min-h-[100vh] flex items-center">
  <form name="form" onsubmit="return validate()" class="w-full  mx-auto p-5 rounded-md  border" enctype="multipart/form-data" action="index.php?create" method="post">
    <div class="flex space-x-2 justify-end">
      <a href="index.php" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Trở về</a>
    </div>
    <h2 class="text-xl text-center my-5">Thêm mới sản phẩm</h2>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
          tên sản phẩm
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" name="name" placeholder="">
        <p class="text-gray-600 text-xs italic">Tuỳ bạn đặt như nào thì đặt</p>
        <p class=" text-xs italic error text-red-600"><?= $err['name'] ?? '' ?></p>

      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
          hình ảnh
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="images" type="file" name="images[]" multiple>
        <p class="text-gray-600 text-xs italic">có thể chọn nhiều hình ok</p>
        <p class=" text-xs italic error text-red-600"><?= $err['image'] ?? '' ?></p>

      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6 space-x-3">

      <p class="w-full ml-3">Sản phẩm đặc biệt?</p>
      <div class="form-check space-x-1">
        <input value="1" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="featured" id="featured_ok">
        <label class="form-check-label inline-block text-gray-800" for="featured_ok">
          Chuẩn rồi
        </label>


      </div>
      <div class="form-check space-x-1">
        <input value="0" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="featured" id="featured_ko">
        <label class="form-check-label inline-block text-gray-800" for="featured_ko">
          không phải nhé
        </label>
      </div>
      <p class=" text-xs italic error text-red-600"><?= $err['featured'] ?? '' ?></p>

    </div>
    <div class="flex flex-wrap -mx-3 mb-6 space-x-3">
      <p class="w-full ml-3">Trạng thái?</p>
      <div class="form-check space-x-1">
        <input value="1" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="active" id="active">
        <label class="form-check-label inline-block text-gray-800" for="active">
          bán
        </label>
      </div>
      <div class="form-check space-x-1">
        <input value="0" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="active" id="active_not">
        <label class="form-check-label inline-block text-gray-800" for="active_not">
          không
        </label>
      </div>
      <p class=" text-xs italic error text-red-600"><?= $err['active'] ?? '' ?></p>

    </div>




    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          giá
        </label>
        <input value="0" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="number" name="price" placeholder="">
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          mã
        </label>
        <div class="relative">
          <?php if (count($rows_voucher) == 0) : ?>
            <h3 class="text-xl">Không có dữ liệu</h3>
          <?php else : ?>
            <select name="voucher_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option value="" selected>Chọn trường</option>
              <?php foreach ($rows_voucher as $voucher) : ?>
                <option value="<?= $voucher['id'] ?>">
                  <?= $voucher['name'] ?>| Giảm : <?= $voucher['discount'] . '%' ?>
                </option>

              <?php endforeach; ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <i class="fa-solid fa-caret-down"></i>
            </div>
          <?php endif ?>
          <p class=" text-xs italic error text-red-600"><?= $err['brand_id'] ?? '' ?></p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          danh mục
        </label>
        <div class="relative">
          <?php if (count($rows_cate) == 0) : ?>
            <h3 class="text-xl">Không có dữ liệu</h3>
          <?php else : ?>
            <select name="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option value="" selected>Chọn trường</option>
              <?php foreach ($rows_cate as $cate) : ?>
                <option value="<?= $cate['id'] ?>">
                  <?= $cate['name'] ?>
                </option>

              <?php endforeach; ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <i class="fa-solid fa-caret-down"></i>
            </div>
          <?php endif ?>
          <p class=" text-xs italic error text-red-600"><?= $err['brand_id'] ?? '' ?></p>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          hãng
        </label>
        <div class="relative">
          <?php if (count($rows_brand) == 0) : ?>
            <h3 class="text-xl">Không có dữ liệu</h3>
          <?php else : ?>
            <select name="brand_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option value="" selected>Chọn trường</option>
              <?php foreach ($rows_brand as $brand) : ?>
                <option value="<?= $brand['id'] ?>">
                  <?= $brand['name'] ?>
                </option>

              <?php endforeach; ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <i class="fa-solid fa-caret-down"></i>
            </div>
          <?php endif ?>
          <p class=" text-xs italic error text-red-600"><?= $err['brand_id'] ?? '' ?></p>

        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
          mô tả
        </label>
        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="" type="text" name="description" placeholder=""></textarea>
      </div>
    </div>
    <div class="flex space-x-2 justify-center mt-4">
      <button type="submit" name="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Gửi đê</button>
    </div>
  </form>
</div>
<!-- <script>
  var openBlock = () => {
    var open_block = document.querySelector('.open_block');
    if (open_block.classList.contains('block')) {
      open_block.classList.remove('block');
      open_block.classList.add('hidden');

    } else {
      open_block.classList.add('block');
      open_block.classList.remove('hidden');
    }
  }
  var validate = () => {
    let name = document.querySelector('input[name="name"]');
    let slt = document.querySelectorAll('select');
    slt.foreach(item => {
      if (item.value == "") {
        alert('Please enter first name');
        return false;
      }
    })
    if (name.value == '') {
      var err = name.parentElement;
      err = err.querySelector('.error');
      err.innerHTML = 'Cần có thông tin';
      return false;
    } else {
      var err = name.parentElement;
      err = err.querySelector('.error');
      err.innerHTML = '';
    }
    const images = document.getElementById('images');
    if (!images.value) {
      alert('No images found');
      return false;
    }
    for (var i = 0; i < images.files.length; i++) {
      var f = images.files[i];
      if (!endsWith(f.name, 'jpg') && !endsWith(f.name, 'png')) {
        alert(f.name + " is not a valid file!");
        return false;
      } else {
        return true;
      }
    }

  }

  function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
  }
</script> -->