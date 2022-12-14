<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Isi Keranjang</title>
    <style>
        <?php
        if (isset($_SESSION["mengunjungi"])) {
            echo "#bayangan{";
            echo "display: none;";
            echo "}";
        } else {
            echo "#utama{";
            echo "display: none;";
            echo "}";
        }
        ?>
    </style>
</head>

<body>
    <div class="countainer bg-light pb-5" style="width: 30vw;" id="utama">
        <div class="row">
            <div class="col-12">
                <h3>Barang Yang Sudah Dipilih</h3>
            </div>
            <div class="col-12">
                <?php
                echo "<ol>";

                if (!empty($_POST['makanminum'])) {
                    foreach ($_POST['makanminum'] as $makanminum) {
                        echo "<li>" . $makanminum . "</li>";
                    }
                }

                if (!empty($_POST['peralatanmandi'])) {
                    foreach ($_POST['peralatanmandi'] as $peralatanmandi) {
                        echo "<li>" . $peralatanmandi . "</li>";
                    }
                }

                if (!empty($_POST['alattulis'])) {
                    foreach ($_POST['alattulis'] as $alattulis) {
                        echo "<li>" . $alattulis . "</li>";
                    }
                }
                echo "</ol>";
                ?>

            </div>
            <div class="col-12 pt-2">
                <a href="pilihBarang.php">
                    <input class="btn btn-primary" name="back" value="Kembali" />
                </a>
            </div>
            <div class="col-12 pt-2">
                <a href="Logout.php">
                    <input class="btn btn-danger" name="Logout" value="Logout" />
                </a>
            </div>
        </div>
    </div>

<div class="counter text-center" id="bayang">
    <h1> Login terlebih dahulu</h1>
            <h3><a href="Login.php">
                Login Ulang 
            </a></h3>
</div>
</body>
</html>