<?php
// transaksi.php
include 'db.php'; // Memasukkan koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // Query untuk menyimpan data transaksi
    $sql = "INSERT INTO transaksi (nama_pelanggan, nama_barang, jumlah, harga) VALUES ('$nama_pelanggan', '$nama_barang', '$jumlah', '$harga')";

    if ($conn->query($sql) === TRUE) {
        // Pesan sukses dengan hiasan
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Transaksi Berhasil</title>
            <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
            <style>
                body {
                    background-color: #e3f2fd; /* Warna biru muda */
                    font-family: 'Arial', sans-serif;
                }
                .alert {
                    border-radius: 10px; /* Membuat sudut lebih bulat */
                }
                h4 {
                    color: #ff4081; /* Warna cerah untuk judul */
                }
                p {
                    font-size: 1.2em; /* Ukuran font lebih besar */
                }
            </style>
        </head>
        <body>
            <div class='container text-center mt-5'>
                <div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>🎉 Transaksi Berhasil!</h4>
                    <p>Data transaksi untuk <strong>$nama_pelanggan</strong> telah berhasil dikirim! <span style='font-size: 1.5em;'>🚀</span></p>
                    <hr>
                    <p class='mb-0'>Terima kasih telah bertransaksi dengan kami! 😊</p>
                </div>
                <a href='index.php' class='btn btn-primary'>Kembali ke Beranda</a>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "<p class='text-center text-danger'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>
