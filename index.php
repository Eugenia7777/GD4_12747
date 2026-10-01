<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TiketWar</title>
</head>
<body>
    <?php
    echo "Selamat datang di TiketWar - war tiket konser paling gercep!";
    $namaKonser = "Coldplay - Music of the Spheres";
    $hargaTiket = 1500000;
    $sisaTiket = 25;
    $sudahSoldOut = false;
    $kategoriTiket = "Festival";
    echo "<h2>$namaKonser</h2>";
    echo "<p>Harga Tiket: Rp $hargaTiket</p>";
    echo "<p>Sisa Tiket: $sisaTiket</p>";
    echo "<p>Sold Out: $sudahSoldOut</p>";
    echo "<p>Kategori Tiket: $kategoriTiket</p>";
    ?>
</body>
</html>
