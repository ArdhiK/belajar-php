<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dokumen</title>
</head>

<body>
    <h1> Masukkan Nama dan Diulang </h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (!empty($_POST['submit'])) {

        switch ($_POST['nama']) {
            case "Ardhi";
                $pesan = $_POST['nama'] . " adalah orang Jombang";
                break;
            case "Kurniawan";
                $pesan = $_POST['nama'] . " berasal dari Provinsi Jawa Timur";
                break;
            default;
                $pesan = $_POST['nama'] . " dari daerah lain";
        }

        for ($i = 0; $i < $_POST['no']; $i++) {
            echo $pesan . "<br>";
        }
    } else {
        echo "Anda belum memasukkan nama";
    }
    ?>
</body>

</html>