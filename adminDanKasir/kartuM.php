<?php
include "../connection.php";
$sql = "SELECT * FROM tmember WHERE idMember = '" . $_GET['idMember'] . "'";
$queryMember = mysqli_query($conn, $sql);
$dataMember = mysqli_fetch_array($queryMember);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Kartu Member</title>
    <link rel="stylesheet" href="../assets/css/main/app.css">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <!-- <a href="index.html"><i class="bi bi-chevron-left"></i></a> -->
            <!-- <a class="navbar-brand ms-4" href="#">
                <a href="#">
                    <h4>LaundryaN</h4>
                </a>
            </a> -->
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="foto">
                        <img src="../assets/images/logo/logoLN.png" alt="" width="100" height="auto">
                    </div>
                </div> -->
                <div class="col-md-4 kertas-biodata">
                    <div class="biodata">
                        <table width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td valign="top">
                                        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                            <tbody>
                                                <tr>
                                                    <!-- <td width="25%" valign="top" class="textt"> 
                                                    </td> -->
                                                    <td width="2%">
                                                        <img src="../assets/images/logo/logoLN.png" alt="" width="100" height="auto">
                                                    </td>
                                                    <td style="color: rgb(118, 157, 29); font-weight:bold">
                                                        <a class="navbar-brand ms-4" href="#">
                                                            <h4>LaundryaN Member Card</h4>
                                                            <label class="text-primary" for="">ID <?= $dataMember['idMember'] ?></label>
                                                            <!-- <input type="text" disabled name="idMember" value=" ID <?= $dataMember['idMember'] ?>" class="form-control" placeholder="Name" id="first-name-icon"> -->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <!-- <td>:</td> -->
                                                    <td> : <?= $dataMember['nama'] ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <!-- <td>:</td> -->
                                                    <td> : <?= $dataMember['alamat'] ?></td>

                                                </tr>
                                                <tr>
                                                    <td>Telepon</td>
                                                    <!-- <td>:</td> -->
                                                    <td> : <?= $dataMember['notelepon'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <!-- <td>:</td> -->
                                                    <td> : <?= $dataMember['jeniskelamin'] ?></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>