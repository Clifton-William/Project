<div id="dashboard" class="mb-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">
                    <span data-feather="users" class="mr-2"></span> Anggota
                </div>
                <div class="card-body">
                    <p class="card-text">Anggota Aktif</p>
                    <h5 class="card-title">Total {{ $member }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">
                    <span data-feather="book" class="mr-2"></span> Buku
                </div>
                <div class="card-body">
                    <p class="card-text">Tersedia</p>
                    <h5 class="card-title">Total {{ $buku }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">
                    <span data-feather="file-text" class="mr-2"></span> Pinjaman
                </div>
                <div class="card-body">
                    <p class="card-text">Di Pinjam</p>
                    <h5 class="card-title">Total {{ $pinjam }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">
                    <span data-feather="clock" class="mr-2"></span> Pengembalian
                </div>
                <div class="card-body">
                    <p class="card-text">Terlambat</p>
                    <h5 class="card-title">Total {{ $kembali }}</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahan Chart -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title" style="color:#000000;"><strong>Statistik Pengunjung</strong></h5>
            <div style="height:300px;">
              <canvas id="returnChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Script Chart -->
<script>
  const ctx = document.getElementById('returnChart').getContext('2d');
  const returnChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
      datasets: [{
        label: 'Terlambat',
        data: [5, 8, 6, 10, 7, 12, 9, 15, 11, 18, 13], // Data simulasi jumlah keterlambatan
        backgroundColor: 'rgba(220, 53, 69, 0.1)', // Merah soft
        borderColor: '#dc3545', // Warna merah bootstrap danger
        borderWidth: 3,
        pointBackgroundColor: '#dc3545',
        tension: 0.4,
        fill: true,
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 5
          }
        }
      },
      plugins: {
        legend: {
          display: false
        }
      }
    }
  });
</script>
