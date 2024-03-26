<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Profil Saya</h1>
        <div class="profile-info">
            <?php
                // Variabel untuk menyimpan informasi pribadi
                $nama = "Muhammad Hafis Gunawan Purba";
                $email = "hafiz.gunawan03@gmail.com";
                $nomor_telepon = "081396310612";
                $alamat = "Jl. M. Yakub No.24";
                $hoby = "Badminton and Playing Soccer";

                // Menampilkan informasi pribadi
                echo "<p>Nama: $nama</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Nomor Telepon: $nomor_telepon</p>";
                echo "<p>Alamat: $alamat</p>";
                echo "<p>Hoby: $hoby</p>";
            ?>
        </div>
    </div>
</body>
</html>
