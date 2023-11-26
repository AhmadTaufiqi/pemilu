<!-- Konten -->
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header mt-2">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body mt-2">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary"></div>
                        <div class="card-body">
                            <h3 class="card-title text-center"><b>Selamat Datang di Relawan Pemilu 2024</b></h3>
                            <p class="text-secondary text-center">Kader Pejuang, Penggerak, dan Penggalang Pemilih (KP4) Partai Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md">
                    <div class="accordion" id="accordion-example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">
                                    Jumlah Relawan Baru 5 Hari Terakhir
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="chart_container" width="100%" height="50">
                                                    Your browser does not support the canvas element.
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row mt-4">
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-primary">
                            <div class="card-body">
                                <div id="table-default" class="table-responsive">
                                    <table class="table mb-5">
                                        <thead>
                                            <tr>
                                                <th><button class="table-sort" data-sort="sort-name">Username</button></th>
                                                <th><button class="table-sort" data-sort="sort-city">Name</button></th>
                                                <th><button class="table-sort" data-sort="sort-type">Jumlah</button></th>

                                            </tr>
                                        </thead>
                                        <tbody class="table-body">
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>
                                            <tr>
                                                <td class="sort-name">Steel Vengeance</td>
                                                <td class="sort-city">Steel Vengeance</td>
                                                <td class="sort-type">500</td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        // const data = {
        //     datasets: [{
        //         data: [300, 50, 100],
        //         backgroundColor: [
        //             'rgb(255, 99, 132)',
        //             'rgb(54, 162, 235)',
        //             'rgb(255, 205, 86)'
        //         ],
        //         hoverOffset: 4
        //     }]
        // };
        const labels = JSON.parse('<?= json_encode($label) ?>');
        const datas = JSON.parse('<?= json_encode($total) ?>');
        console.log((labels))
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: datas,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };
        const config = {
            type: 'line',
            data: data,
            height:250
        };
        const chart_container = document.getElementById('chart_container');
        new Chart(chart_container, config)
    </script>