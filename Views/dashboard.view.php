<?php
include_once 'base.view.php';
include_once 'sections/admin-nav.view.php';
?>

<div class="flex items-center justify-center m-2">

    <!-- Component Start -->
    <div class="flex space-x-4 overflow-x-auto shadow-1xl p-4">
        <?php foreach ($data as $item) : ?>
            <div class="w-48 md:w-64 bg-white  shadow-xl p-6 rounded-2xl">
                <div class="flex items-center">
                    <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-100"> 
                    <img class=" h-1/2 w-1/2" src="<?php asset("../../" . $item['image']); ?>" alt="" srcset="">
                    </span>
                    <a href="/shop/<?=$item['name'];?>"><span class="ml-2 text-sm font-medium text-pink-550"> <?= ucwords($item['name']); ?></span></a>
                </div>
                <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $item['all'] -  ($item['all'] - $item['available']) ; ?><span class="ml-2 text-lg">left</span></span>
                <div class="flex text-xs mt-3 font-medium">
                    <span class="text-green-500"><?= $item['all'] - $item['available']; ?></span>
                    <span class="ml-1 text-pink-550"><span class="hidden md:inline-flex">out of</span><span class="md:hidden">/</span> </span>
                    <span class="ml-1 text-green-500"><?= $item['all']; ?></span>
                    <span class="ml-1 text-pink-550">Sold</span>
                </div>
            </div>
        <?php endforeach; ?>  
    </div>
    <!-- Component End  -->
</div>
<div class="flex items-center justify-center m-2">
    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
        <div class="flex flex-col md:col-span-2 md:row-span-3 bg-white shadow rounded-lg">
            <div class="text-green-500 px-6 py-5 font-semibold border-b border-green-100">The number of Liked Products</div>
            <div class="p-4 flex-grow">
                <div class="flex items-center justify-center h-full w-auto md:w-full px-4 py-16 text-green-400 text-3xl font-semibold bg-green-100 border-2 border-green-200 border-dashed rounded-md">

                <canvas class=""  id="chart"></canvas>
                </div>
            </div>
        </div>
        <div class="flex flex-col  md:col-span-2 row-span-3 bg-white shadow rounded-lg">
            <div class="text-green-500 px-6 py-5 font-semibold border-b border-green-100">The number by sold products</div>
            <div class="p-4 flex-grow">
                <div class="flex items-center justify-center h-full px-4 py-24 text-green-400 text-3xl font-semibold bg-green-100 border-2 border-green-200 border-dashed rounded-md">Chart</div>
            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const labels = [
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Earrings',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 20],
    },
    {
      label: 'Necklaces',
      backgroundColor: 'rgb(235, 64, 52)',
      borderColor: 'rgb(235, 64, 52)',
      data: [8, 20, 10, 15],
    }
    ,
    {
      label: 'Belts',
      backgroundColor: 'rgb(96, 106, 179)',
      borderColor: 'rgb(96, 106, 179)',
      data: [10, 20, 1, 0],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('chart'),
    config
  );
</script>