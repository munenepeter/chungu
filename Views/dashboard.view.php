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
            <img class=" h-1/2 w-1/2" src="<?php asset("../".$item['image']); ?>" alt="" srcset="">
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
<div class="md:flex items-center justify-center m-2 h-80 ">
  <div class="md:w-1/2 w-full">
    <div class="shadow-md rounded-lg bg-white">
    <canvas class="" id="chart"></canvas>
    </div>
  </div>
  <div class="md:w-1/2 w-full">
  <div x-data="app()" x-cloak class="px-4">
    <div class="max-w-lg mx-auto py-24">
      <div class="shadow-md p-6 rounded-lg bg-white">
        <div class="md:flex md:justify-between md:items-center">
          <div>
            <h2 class="text-xl text-pink-550 font-bold leading-tight">Product Sales</h2>
            <p class="mb-2 text-green-550 text-sm">Monthly Average</p>
          </div>

          <!-- Legends -->
          <div class="mb-4">
            <div class="flex items-center">
              <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
              <div class="text-sm text-gray-700">Sales</div>
            </div>
          </div>
        </div>

        <div class="line my-8 relative">
          <!-- Tooltip -->
          <template x-if="tooltipOpen == true">
            <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block" :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
              <div class="shadow-xs rounded-lg bg-white p-2">
                <div class="flex items-center justify-between text-sm">
                  <div>Sales:</div>
                  <div class="font-bold ml-2">
                    <span x-html="tooltipContent"></span>
                  </div>
                </div>
              </div>
            </div>
          </template>

          <!-- Bar Chart -->
          <div class="flex -mx-2 items-end mb-2">
            <template x-for="data in chartData">

              <div class="px-2 w-1/6">
                <div :style="`height: ${data}px`" class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                </div>
              </div>

            </template>
          </div>

          <!-- Labels -->
          <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
          <div class="flex -mx-2 items-end">
            <template x-for="data in labels">
              <div class="px-2 w-1/6">
                <div class="bg-red-600 relative">
                  <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                </div>
              </div>
            </template>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    function app() {
      return {
        chartData: [101, 80, 50, 100, 20],
        labels: ['Mar','Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        tooltipContent: '',
        tooltipOpen: false,
        tooltipX: 0,
        tooltipY: 0,
        showTooltip(e) {
          console.log(e);
          this.tooltipContent = e.target.textContent
          this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
          this.tooltipY = e.target.clientHeight + e.target.clientWidth;
        },
        hideTooltip(e) {
          this.tooltipContent = '';
          this.tooltipOpen = false;
          this.tooltipX = 0;
          this.tooltipY = 0;
        }
      }
    }
  </script>
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