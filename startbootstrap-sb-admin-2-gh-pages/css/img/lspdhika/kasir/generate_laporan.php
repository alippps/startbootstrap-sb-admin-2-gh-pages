<?php
// Panggil file function.php atau file lain yang diperlukan
include '../function.php';
require_once '../vendor/dompdf/autoload.inc.php'; // Panggil autoload.php dari DOMPDF

// Gunakan DOMPDF
use Dompdf\Dompdf;

// Proses pembuatan laporan
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- Informasi Restoran -->
    <div style="text-align: center;">
    <p>The MaResto</p>
    <br>
    <p>Jl. Taruna 3 No. 135 Pondok Gede, Kec. Jatiwaringin, Kota Jawa Barat<br>
    Telp. +62812 9270 0357 || E-mail langs@gmail.com</p>
</div>

<br>
<br>
<br>
<br>
<br>
    <div class="card-body">
        <div class="table-responsive table-striped pt-3">
            <table>
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>ID Pesanan</th>
                        <th>Total</th>
                        <th>Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambildata = mysqli_query($conn, "SELECT * FROM transaksi");
                    $i = 1;
                    while ($tampil = mysqli_fetch_array($ambildata)) {
                        $idtransaksi = $tampil['idtransaksi'];
                        $idpesanan = $tampil['idpesanan'];
                        $Total = $tampil['Total'];
                        $Bayar = $tampil['Bayar'];
                    ?>
                        <tr>
                            <td><?= $idtransaksi; ?></td>
                            <td><?= $idpesanan; ?></td>
                            <td><?= number_format($Total); ?></td>
                            <td><?= number_format($Bayar); ?></td>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
$html = ob_get_clean(); // Ambil output HTML dari buffer

// Buat objek DOMPDF
$dompdf = new Dompdf();

// Load HTML ke dalam DOMPDF
$dompdf->loadHtml($html);

// Render PDF (proses konversi)
$dompdf->render();

$dompdf->stream('laporan_transaksi.pdf', array('Attachment' => 0));
?>
