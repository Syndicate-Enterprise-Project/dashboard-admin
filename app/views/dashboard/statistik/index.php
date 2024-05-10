<div class="d-flex flex-column w-100 mx-2" style="margin-top: 5rem;">
    <div id="chart" data-chart="<?= $data['tanggal']; ?>"></div>
    <div class="row row-cols-1 row-cols-md-2 g-4" style="display: flex; justify-content: center; align-items: center;">
        <div class="col">
            <div class="">
                <div class="mx-4 w-80">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="">
                <div class="mx-4 w-80">
                    <div>
                        <canvas id="tempatPenjualan"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="">
                <div class="mx-4 w-80">
                    <div>
                        <canvas id="tipeMobil"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="">
                <div class="mx-4 w-80">
                    <div>
                        <canvas id="metodePenjualan"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="">
                <div class="mx-4 w-80">
                    <div>
                        <canvas id="tipeMobil"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="">
                <div class="mx-4 w-80">
                    <div>
                        <canvas id="metodePenjualan"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div id="chart" data-chart="<?= $data['tanggal']; ?>"></div> -->
<!-- <div class="mx-4 w-100">
    <div>
        <canvas id="myChart"></canvas>
    </div>
</div> -->

<!-- penjualan chery setiap bulan -->
<!-- penjualan chery setiap tempat penjualan/pemesanan -->
<!-- jumlah penjualan berdasarkan tipe mobil -->
<!-- jumlah penjualan berdasarkan kredit/cash -->
<!-- jumlah penjualan berdasarkan kota -->


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= BASEURL; ?>/js/jquery-3.7.1.min.js"></script>

<script>
    $(document).ready(function() {
        // Panggil fungsi penjualanBulan saat dokumen sudah dimuat
        penjualanBulan();
        tempatPenjualanBulan();
        penjualanTipeMobil();
        metodePenjualanMobil();
    });

    function penjualanBulan() {
        const bulan = $('#chart').data("chart");
        const ctx = document.getElementById('myChart');

        console.log(bulan)

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', "Oktober", 'November', 'Desember'],
                datasets: [{
                    label: '# Banyak Penjualan',
                    data: [bulan['01'], bulan['02'], bulan['03'], bulan['04'], bulan['05'], bulan['06'], bulan['07'], bulan['08'], bulan['09'], bulan['10'], bulan['11'], bulan['12']],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function tempatPenjualanBulan() {
        const bulan = $('#chart').data("chart");
        const ctx = document.getElementById('tempatPenjualan');

        console.log(bulan)

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', "Oktober", 'November', 'Desember'],
                datasets: [{
                    label: '# Tempat Penjualan',
                    data: [bulan['01'], bulan['02'], bulan['03'], bulan['04'], bulan['05'], bulan['06'], bulan['07'], bulan['08'], bulan['09'], bulan['10'], bulan['11'], bulan['12']],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function penjualanTipeMobil() {
        const bulan = $('#chart').data("chart");
        const ctx = document.getElementById('tipeMobil');

        console.log(bulan)

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', "Oktober", 'November', 'Desember'],
                datasets: [{
                    label: '# Tipe Mobil',
                    data: [bulan['01'], bulan['02'], bulan['03'], bulan['04'], bulan['05'], bulan['06'], bulan['07'], bulan['08'], bulan['09'], bulan['10'], bulan['11'], bulan['12']],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function metodePenjualanMobil() {
        const bulan = $('#chart').data("chart");
        const ctx = document.getElementById('metodePenjualan');

        console.log(bulan)

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', "Oktober", 'November', 'Desember'],
                datasets: [{
                    label: '# Metode Pembelian',
                    data: [bulan['01'], bulan['02'], bulan['03'], bulan['04'], bulan['05'], bulan['06'], bulan['07'], bulan['08'], bulan['09'], bulan['10'], bulan['11'], bulan['12']],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>