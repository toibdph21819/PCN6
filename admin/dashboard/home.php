<div class="p-5 ">
  <h2 class="text-xl">Dashboard</h2>
  <div class="grid grid-cols-3 gap-3">
    <div class="flex justify-center ">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm text-center">
        <h5 class="text-gray-900 text-base leading-tight font-medium mb-2">Số lượng khách hàng đăng ký tài khoản</h5>
        <p class="text-gray-700 text-2xl mb-4">
          <?= $user_count['count'] ?>
        </p>

      </div>
    </div>
    <div class="flex justify-center ">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm text-center">
        <h5 class="text-gray-900 text-base leading-tight font-medium mb-2">Số lượng sản phẩm trong website</h5>
        <p class="text-gray-700  text-2xl mb-4">
          <?= $product_count['count'] ?>
        </p>

      </div>
    </div>
    <div class="flex justify-center ">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm text-center">
        <h5 class="text-gray-900 text-base leading-tight font-medium mb-2">Số lượng phản hồi trong website</h5>
        <p class="text-gray-700 text-2xl mb-4">
          <?= $contact_count['count'] ?>
        </p>

      </div>
    </div>
    <div class="flex justify-center ">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm text-center">
        <h5 class="text-gray-900 text-base leading-tight font-medium mb-2">Số lượng thương hiệu trong website</h5>
        <p class="text-gray-700 text-2xl mb-4">
          <?= $brand_count['count'] ?>
        </p>

      </div>
    </div>
    <div class="flex justify-center ">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm text-center">
        <h5 class="text-gray-900 text-base leading-tight font-medium mb-2">Số danh mục trong website</h5>
        <p class="text-gray-700 text-2xl mb-4">
          <?= $category_count['count'] ?>
        </p>

      </div>
    </div>
  </div>
</div>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


<div id="myPlot" style="width:100%;"></div>

<script>
  <?php
  $product_count_by_category =  product_select_stats_by_category();

  ?>
  var xArray = [<?php foreach ($product_count_by_category as $item) {
                  extract($item);
                  echo "'$name',";
                } ?>];
  var yArray = [<?php foreach ($product_count_by_category as $item) {
                  extract($item);
                  echo "'$count',";
                } ?>];

  var layout = {
    title: "Thống kê số lượng sản phẩm theo danh mục"
  };

  var data = [{
    labels: xArray,
    values: yArray,
    type: "pie"
  }];

  Plotly.newPlot("myPlot", data, layout);
</script>