<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
    $Nama_Gamis = ($_POST["Nama_Gamis"]);
    $Model_gamis = ($_POST["Model_gamis"]);
    $Stok = ($_POST["Stok"]);

    $insert_sql = "INSERT INTO data_gamis VALUES ('','$Nama_Gamis','$Model_gamis','$Stok')";
    $result = mysqli_query($conn, $insert_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'create.php';
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
    <title>CREATE DATA</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-header">
                <h2>FORM untuk Data gamis</h2>
            </div>
            <div class="form-content">
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Nama_gamis :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="Nama_Gamis" autocomplete="off">
                    </div>
                </div>
                <div class="form-area">
                    <div class="form-label">
                        <label for="">Model :</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="Model_gamis" autocomplete="off">
                    </div>
                </div>
                   <div class="form-label">
                        <label for="">STOK :</label>
                    </div>				
                     <div class="form-input">
                        <input type="text" name="Stok" autocomplete="off">
                    </div>
                </div>
                <div class="form-button">
                    <button type="submit" name="submit">Submit</button>
                    <a href="index.php">Kembali ke Home</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>