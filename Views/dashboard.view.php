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
          <a href="/shop/<?= $item['name']; ?>"><span class="ml-2 text-sm font-medium text-pink-550"> <?= ucwords($item['name']); ?></span></a>
        </div>
        <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $item['all'] -  ($item['all'] - $item['available']); ?><span class="ml-2 text-lg">left</span></span>
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
<div class="flex items-center justify-center m-2 h-96 ">
  <div class="md:w-1/2 w-full">
    <canvas class="" id="chart"></canvas>
  </div>
  <div class="
  ">
 
</div>
  
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('chart').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line', // also try bar or other graph types

    // The data for our dataset
    data: {
      labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"],
      // Information about the dataset
      datasets: [{
        label: "Earrings",
        backgroundColor: 'lightblue',
        borderColor: 'royalblue',
        data: [26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 110.8, 142.6],
      },
      {
        label: "Necklaces",
        backgroundColor: 'red',
        borderColor: 'red',
        data: [27.4, 7.8, 16.8, 64.4, 20.6, 35.2, 7.4, 64.8, 5.8, 76, 10.8, 14.6],
      }]
    },

    // Configuration options
    options: {
      layout: {
        padding: 10,
      },
      legend: {
        position: 'bottom',
      },
      title: {
        display: true,
        text: 'Precipitation in Toronto'
      },
      scales: {
        yAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Precipitation in mm'
          }
        }],
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Month of the Year'
          }
        }]
      }
    }
  });
</script>