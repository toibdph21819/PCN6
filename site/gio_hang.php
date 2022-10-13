<div class="p-10 container mx-auto w-full flex justify-center">
  <div class="  bg-white mx-auto">
    <div class="h-20 text-3xl leading-[80px] px-3">Giỏ hàng</div>
    <table class="px-5 ">
      <tr>
        <th class="w-40 border-y-8 h-12"><input class="check-all" type="checkbox" name="buy[]" id=""></th>
        <th class="w-40 border-y-8 h-12">hình</th>
        <th class="w-40 border-y-8 h-12">tên</th>
        <th class="w-40 border-y-8 h-12">đơn giá</th>
        <th class="w-40 border-y-8 h-12">số lượng</th>
        <th class="w-40 border-y-8 h-12">giá tiền</th>
        <th class="w-40 border-y-8 h-12">thao tác</th>
      </tr>
      <tr class="text-xs border-y-8">
        <td class="py-3 text-center"><input class="check-one" type="checkbox" name="" id=""></td>
        <td class="py-3 text-center"><img width="100%" height="100%" src="<?= $CONTENT_URL ?>/images/a1.jpg" alt=""></td>
        <td class="py-3 text-center" style="-webkit-box-orient: vertical;-webkit-line-clamp: 2;display: -webkit-box;">
          <div class="text-xs overflow-hidden text-ellipsis" style="-webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box;">
            Chuột Máy Tính Chơi Game Sidotech Abcdhfkj eokepe eokepe eokepe
          </div>
        </td>
        <td class="py-3 text-center">100.000</td>
        <td class="py-3 text-center">2</td>
        <td class="py-3 text-center">200.000</td>
        <td class="py-3 text-center"><a class="text-red-500" href="">xoá</a></td>
      </tr>
      <tr class="text-xs border-y-8">
        <td class="py-3 text-center"><input class="check-one" type="checkbox" name="" id=""></td>
        <td class="py-3 text-center"><img width="100%" height="100%" src="<?= $CONTENT_URL ?>/images/a1.jpg" alt=""></td>
        <td class="py-3 text-center " style="-webkit-box-orient: vertical;-webkit-line-clamp: 2;display: -webkit-box;">
          <div class="text-xs overflow-hidden text-ellipsis" style="-webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box;">
            Chuột Máy Tính Chơi Game Sidotech Abcdhfkj eokepe eokepe eokepe
          </div>
        </td>
        <td class="py-3 text-center">100.000</td>
        <td class="py-3 text-center">2</td>
        <td class="py-3 text-center">200.000</td>
        <td class="py-3 text-center"><a class="text-red-500" href="">xoá</a></td>
      </tr>

      <tr class="text-center">
        <td colspan="5" class="h-24">
          tổng tiền(0 sản phẩm đã chọn): 0
        </td>
        <td colspan="2" class="h-24">
          <button class="w-40 h-14 bg-primary rounded-md text-white hover:text-primary hover:bg-white hover:border-2 hover:border-primary">Mua hàng</button>
        </td>
      </tr>
    </table>

  </div>
</div>
<script src="./gio_hang.js"></script>