<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pelanggan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7fa; /* Latar belakang biru muda */
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #0097a7; /* Warna header biru gelap */
            color: #ffffff;
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-primary {
            background-color: #00838f; /* Warna tombol biru gelap */
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #006064; /* Warna tombol saat hover */
        }
        .form-control {
            border-radius: 10px;
        }
        .text-success {
            color: #4caf50;
        }
        .text-danger {
            color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Form Transaksi</div>
            <div class="card-body">
                <form action="transaksi.php" method="POST">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga per Item</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Kirim Transaksi</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
