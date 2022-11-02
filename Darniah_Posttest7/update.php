<?php
require 'koneksi.php';

$Resi = $_GET["Resi"];

$select_sql = "SELECT * FROM data_gamis WHERE Resi = $Resi";
$result = mysqli_query($conn, $select_sql);

$gamis = [];

while ($row = mysqli_fetch_assoc($result)) {
    $gamis[] = $row;
}

$gamis = $gamis[0];

if (isset($_POST["update"])) {
    $Nama_Gamis = htmlspecialchars($_POST["Nama_Gamis"]);
    $Model_gamis = htmlspecialchars($_POST["Model_gamis"]);
    $Stok = htmlspecialchars($_POST["Stok"]);

    $update_sql = "UPDATE data_gamis SET Nama_Gamis='$Nama_Gamis',Model_gamis='$Model_gamis',Stok='$Stok' WHERE Resi=$Resi";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil diupdate!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diupdate!');
            document.location.href = 'update.php';
        </script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-header">
                <h2>FORM UPDATE DATA</h2>
            </div>
            <input type="hidden" name="Resi" value="<?= $gagal["Resi"]; ?>>
            <div class=" form-content">
            <div class="form-area">
                <div class="form-label">
                    <label for="">NAMA_GAMIS :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="Nama_Gamis" value="<?= $gamis["Nama_Gamis"]; ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-area">
                <div class="form-label">
                    <label for="">Model_Gamis :</label>
                </div>
                <div class="form-input">
                    <input type="text" name="Model_gamis" value="<?= $gamis["Model_gamis"]; ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-area">
                <div class="form-label">
                    <label for="">STOK :</label>
                </div>
                 <div class="form-input">
                    <input type="text" name="Stok" value="<?= $gamis["Stok"]; ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-button">
                <button type="submit" name="update">Update</button>
                <a href="index.php">Kembali ke Home</a>
            </div>
    </div>
    </form>
    </div>
</body>

</html>