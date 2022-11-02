<?php
    require 'koneksi.php';

    if(isset($_POST['registrasi'])){
        $nama = strtolower(stripslashes($_POST['nama']));
        $password = mysqli_real_escape_string ($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        if($password == $cpassword){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $cek_nama ="SELECT nama FROM register WHERE nama = '$nama'";
            $temp = mysqli_query($conn, $cek_nama);
            $row = mysqli_fetch_assoc($temp);

            if($row){
                echo "<script>
                    alert('Username Sudah Ada!!');
                    document.location.href ='register.php';
                </script>";                
            }else{
                $insert_sql = "insert into register value('', '$nama', '$password') ";
                $result = mysqli_query($conn, $insert_sql);
    
                if($result){
                    echo "<script>
                        alert('Data berhasil di tambahkan!!');
                        document.location.href ='login.php';
                    </script>";
                }else{
                    echo "<script>
                        alert('Data gagal di tambahkan!!');
                        document.location.href ='register.php';
                    </script>";                
                }
            }

        }else{
            echo "<script>
                    alert('konfirmasi gagal !!');
                    document.location.href ='register.php';
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
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Form Register</title>
</head>
<body>

    <section class="container">
    <h1>form Register</h1>
    <form action="register.php" method="post">
        <div>
            <label for="nama">Username</label><br>
            <input type="text" name="nama" id="nama" autocomplete="off" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required><br>
        </div>

        <div>
            <label for="cpassword">Konfirmasi Password</label>
            <input type="password" name="cpassword" id="cpassword" autocomplete="off" required><br>
        </div>
        <button type="submit" name="registrasi">Register</button>
    </form>
</section>
</body>
</html>