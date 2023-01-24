<?php
include "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak data member</title>
    <link rel="stylesheet" href="../assets/css/main/app.css">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <!-- <a href="index.html"><i class="bi bi-chevron-left"></i></a> -->
            <a class="navbar-brand ms-4" href="#">
                <a href="#">
                    <h4>LaundryaN</h4>
                </a>

                <!-- <img src="../../assets/images/logo/logo.svg"> -->
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="card mt-5">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Data Member
                    </div>
                    <div class="card-body">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>TELEPON</th>
                                    <th>JENIS KELAMIN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM tmember";
                                $queryMember = mysqli_query($conn, $sql);
                                $no = 0;

                                while ($dataMember = mysqli_fetch_array($queryMember)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $dataMember['idMember'] ?></td>

                                        <td><?= $dataMember['nama'] ?></td>
                                        <td><?= $dataMember['alamat'] ?></td>
                                        <td><?= $dataMember['notelepon'] ?></td>
                                        <td><?= $dataMember['jeniskelamin'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

        <script>
            window.print();
        </script>
</body>

</html>