@include('layouts.header')


<body class="">
  
  <div class="wrapper">
   


    <div class="main-panel">
      
      <!-- Navbar -->
     
@include('layouts.navbar')

     
<!-- ... -->

<div class="ugtp">
  <img width="200px" src="../assets/img/ugtechnopark.png" >
</div>

<div class="merdeka">
  <img width="100px" src="../assets/img/merdeka.png" >
</div>

<div class="gundar">
  <img width="100px" src="../assets/img/gundar.png" >
</div>

<div class="kartanagari">
  <img width="100px" src="../assets/img/kartanagari.png" >
</div>
<!-- ... -->

  




    <div class="container-fluid py-2 mt-2">
      <div class="row">
        <div class="col-lg-6">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Graphic</h6>
              <p class="text-sm">
                <span class="font-weight-bold">Getaran</span>
              </p>
            </div>
            <div class="card-body p-2">
              <div class="chart">
                <canvas id="chart-line-accel" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Graphic</h6>
              <p class="text-sm">
                <span class="font-weight-bold">Kemiringan</span>
              </p>
            </div>
            <div class="card-body p-2">
              <div class="chart">
                <canvas id="chart-line-rota" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

  <div class="container-fluid py-2 mt-2">
    <div class="row">
      <div class="col-lg-6">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>Graphic</h6>
            <p class="text-sm">
              <span class="font-weight-bold">Suhu</span>
            </p>
          </div>
          <div class="card-body p-2">
            <div class="chart">
              <canvas id="chart-line-temp" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>Graphic</h6>
            <p class="text-sm">
              <span class="font-weight-bold">Kelembapan</span>
            </p>
          </div>
          <div class="card-body p-2">
            <div class="chart">
              <canvas id="chart-line-humi" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Akhir Graph -->






  @include('layouts.script')

 
  </body>

</html>