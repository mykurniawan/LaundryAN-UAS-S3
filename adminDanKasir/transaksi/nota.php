<?php
include "../../connection.php";
$sql = "SELECT * FROM transaksi 
        INNER JOIN toutlet ON toutlet.idOutlet = transaksi.tempatoutlet
        WHERE idTransaksi = '" . $_GET['idTransaksi'] . "'";
$query = mysqli_query($conn, $sql);
$dataTransaksi = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Vertical 1 Column - Mazer</title>
    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <img src="../../assets/images/logo/logoLN.png" alt="" width="100" height="auto">
                <a href="#">
                    <h4>LaundryaN</h4>
                </a>

            </div>
            <div class="card-body">

                <input type="hidden" name="idTransaksi" value="<?= $dataTransaksi['idTransaksi'] ?>" class="form-control" placeholder="Name" id="first-name-icon">
                <table>
                    <tr>
                        <td>Orderan</td>
                        <td>: <?= $dataTransaksi['orderan'] ?></td>
                    </tr>
                    <tr>
                        <td>Paket</td>
                        <td>: <?= $dataTransaksi['paketc'] ?></td>
                    </tr>
                    <tr>
                        <td>harga /Kg</td>
                        <td>: <?= $dataTransaksi['hargaperkg'] ?></td>
                    </tr>
                    <tr>
                        <td>berat</td>
                        <td>: <?= $dataTransaksi['beratc'] ?></td>
                    </tr>
                    <tr>
                        <td>tgl masuk</td>
                        <td>: <?= $dataTransaksi['tglM'] ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>: <?= $dataTransaksi['bayar'] ?></td>
                    </tr>
                    <tr>
                        <td>tgl bayar</td>
                        <td>: <?= $dataTransaksi['tgl'] ?></td>
                    </tr>
                    <tr>
                        <td>Atas Nama</td>
                        <td>: <?= $dataTransaksi['atasnama'] ?></td>
                    </tr>
                    <tr>
                        <td>Karyawan</td>
                        <td>: <?= $dataTransaksi['karyawan'] ?></td>
                    </tr>
                    <tr>
                        <td>Outlet</td>
                        <td>: <?= $dataTransaksi['namaOutlet'] ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>