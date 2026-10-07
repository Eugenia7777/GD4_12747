<!DOCTYPE html>
<html lang="id">
<head><title>Tambah Tiket - TiketWar</title></head>
<body>
 <h1>Form Tambah Tiket War</h1>
 <form action="prosesTambah.php" method="post" enctype="multipart/form-data">
 <p>
 <label>Nama Tiket:</label><br>
 <input type="text" name="nama" required>
 </p>
 <p>
 <label>Kategori:</label><br>
 <input type="text" name="kategori" required>
 </p>
 <p>
 <label>Harga:</label><br>
 <input type="number" name="harga" required>
 </p>
 <p>
 <label>Bukti Pembayaran:</label><br>
 <input type="file" name="buktiBayar" accept=".jpg,.jpeg,.png" required>
 </p>
 <button type="submit">Tambah Tiket</button>
 </form>
</body>
</html>