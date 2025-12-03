<div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard Admin</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <!-- CARD STATISTIK -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>8</h3>
                <p>Total Event Diajukan</p>
              </div>
              <div class="icon"><i class="fas fa-calendar-plus"></i></div>
              <a href="#" class="small-box-footer">Lihat Event <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>1</h3>
                <p>Event Menunggu Persetujuan</p>
              </div>
              <div class="icon"><i class="fas fa-hourglass-half"></i></div>
              <a href="#" class="small-box-footer">Lihat Event <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>6</h3>
                <p>Event Aktif</p>
              </div>
              <div class="icon"><i class="fas fa-check-circle"></i></div>
              <a href="#" class="small-box-footer">Lihat Event Aktif <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>7 </h3>
                <p>Total User</p>
              </div>
              <div class="icon"><i class="fas fa-users"></i></div>
              <a href="#" class="small-box-footer">Lihat User <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <!-- AREA GRAFIK -->
        <div class="row">

          <!-- CHART -->
          <section class="col-lg-7 connectedSortable">


            <!-- PIE CHART -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i> Statistik Kategori Event Aktif</h3>
              </div>
              <div class="card-body">
                <canvas id="pieKategori" height="280"></canvas>
              </div>
            </div>

          </section>

          <!-- STATISTIK SISTEM -->
          <section class="col-lg-5 connectedSortable">
            <div class="card bg-gradient-primary">
              <div class="card-body">
                <h4 class="text-white">Statistik Sistem</h4>
              </div>

              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <h3 class="text-white">1200</h3>
                    <p class="text-white">Pengunjung</p>
                  </div>
                  <div class="col-4 text-center">
                    <h3 class="text-white">6</h3>
                    <p class="text-white">Event Disetujui</p>
                  </div>
                  <div class="col-4 text-center">
                    <h3 class="text-white">Rp 120.000</h3>
                    <p class="text-white">Total Pemasukan</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>

      </div>
    </section>

</div>
<!-- LOAD CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// PIE CHART
var dataKategori = {
    labels: ["Seminar", "Lomba", "Bazar", "Konser", "Lainnya"],
    datasets: [{
        data: [2, 1, 1, 1, 1],
        backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6f42c1'],
    }]
};

var ctx = document.getElementById('pieKategori').getContext('2d');
new Chart(ctx, {
    type: 'pie',
    data: dataKategori,
});
</script>
