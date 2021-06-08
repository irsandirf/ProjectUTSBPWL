<?php 
include "../model/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pesanan</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="assets/css/main1.css" rel="stylesheet" media="all">
</head>

<body>
<div class="container-fluid">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Edit Pesanan</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="../controller/proses.php?aksi=update_order">
                    <?php 
                    $nomor = $_GET['nomor'];
                    $db = new database();
                    foreach ($db->add_order($nomor) as $a){
                    ?>
                        <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <input class="input--style-6" type="hidden" name="nomor" value="<?php echo $a['nomor'];?>">
                                <input class="input--style-6" type="text" name="nama" value="<?php echo $a['nama'];?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="jenis" value="<?php echo $a['jenis'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jumlah</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="jumlah" value="<?php echo $a['jumlah'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="textarea--style-6" name="alamat" value="<?php echo $a['alamat'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Harga</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="harga" value="<?php echo $a['harga'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Send</button>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->