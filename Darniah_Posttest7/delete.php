<?php
require 'koneksi.php';

$Resi = $_GET["Resi"];

$delete_sql = "DELETE FROM data_gamis WHERE Resi = $Resi";
$result = mysqli_query($conn, $delete_sql);

if ($result) {
    echo "<script>
        alert('Data berhasil dihapus!');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus!');
        document.location.href = 'index.php';
    </script>";
}
?>