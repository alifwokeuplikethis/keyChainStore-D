<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

</head>

<body>


    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">Data Pembeli</h3><button style="float:right;" onclick="window.location.href='/'"><i class="fas fa-arrow-left"></i> Back to home</button>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="export" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
                <a href="dashboard" class="btn btn-secondary"><i class="bi bi-bar-chart"></i>&nbsp;Dashboard</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Pembeli</th>
                            <th>Nama Produk</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Waktu</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($koloms as $kolom){ ?>
                        <tr>    
                            <td><?= $kolom->users; ?></td>
                            <td><?= $kolom->nm_produk; ?></td>
                            <td><?= $kolom->kuantitas; ?></td>
                            <td><?= $kolom->harga; ?></td>
                            <td><?= date('d-m-Y', strtotime($kolom->created_at)); ?></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Close Container -->



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/en-gb.min.js"></script>

    <script>

$(document).ready(function() {
    $('#data').DataTable({
        // Menambahkan fungsi sort untuk kolom ke-6 secara ascending
        "order": [[4, 'asc']], // Indeks kolom dimulai dari 0, jadi kolom ke-5 adalah indeks 4
        "lengthMenu": [10, 25, 50, 75, 100], // Pengaturan untuk memilih jumlah data yang ditampilkan
        "pageLength": 25 // Jumlah data default yang ditampilkan
    });
});

    </script>
</body>

</html>