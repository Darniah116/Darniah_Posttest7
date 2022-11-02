<?php
    session_start();
    require 'koneksi.php';

    if(isset($_POST['login'])){
        $nama =$_POST['nama'];
        $password = $_POST['password'];
        $cek_nama ="select * from register where nama = '$nama'";
        $result = mysqli_query($conn, $cek_nama);

        if(mysqli_num_rows($result)=== 1){
            $row= mysqli_fetch_assoc($result);

            if(password_verify($password, $row['password'])){
                $SESSION['login'] = true;
                echo "<script>
                    alert('anda berhasil login !!');
                    document.location.href ='index.php';
                </script>"; 
            }
        }
$error = true;
}
 
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Form LOGIN</title>
</head>
<body>
    <section class="container">
    <h1>FORM LOGIN</h1>
    <?php if(isset($error)):?>
        <p style="color :'red'; font-weight:200;">Password Salah !!!!</p>
    <?php endif; ?>
    <br>
    <form action="login.php" method="post">
        <div>
        <label for="nama">Username</label><br>
        <input type="text" name="nama" id="nama" autocomplete="off" required>
        </div>
        <div>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" autocomplete="off" required>
        </div>
        <button type="submit" name="login">Masuk</button>
    
    </form>
    </section>
</body>
</html>
