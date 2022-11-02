
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CARI DATA</title>
</head>

<body>
    <section class="tul">
        <form action="" method="post">
            <h1>SEARCHING</h1>
            <table>
                <tr>
                    <th>RESI</th>
                    <th>NAMA GAMIS</th>
                    <th>MODEL GAMIS</th>
                    <th>STOK</th>
                </tr>
                <?php
                require 'koneksi.php';

                $search = $_POST['search'];
                $sql = "SELECT * FROM data_gamis WHERE Nama_Gamis like '%$search%'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                while($row = $result->fetch_assoc() ){
                ?>

                <tr>
                    <td><?php echo $row["Resi"]; ?></td>
                    <td><?php echo $row["Nama_Gamis"]; ?></td>
                    <td><?php echo $row["Model_gamis"]; ?></td>
                    <td><?php echo $row["Stok"]; ?></td>
                </tr>
                <?php
                }
                } else {
                    echo "0 records";
                }

                $conn->close();
                ?>
                </tr>
                <div class="form-button">
                    <a href="index.php">HOME</a>
                </div>
            </table>
        </form>
    </section>
</body>
</html>