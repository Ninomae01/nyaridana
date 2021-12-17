<?php

include 'config.php';

session_start();

//cek udh login apa blom
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

$nama = "";
$username = "";
$email = "";
$errors = array();

//pendaftaran
if (isset($_POST['daftar'])) {
    //tarik inputan dari formnya
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $kpassword = mysqli_real_escape_string($conn, $_POST['kpassword']);

    //cek formnya udh bener apa blom
    if (empty($nama)) { array_push($errors, "Nama dibutuhkan");}
    if (empty($username)) { array_push($errors, "Username dibutuhkan");}
    if (empty($email)) { array_push($errors, "Email dibutuhkan");}
    if (empty($password)) { array_push($errors, "Password dibutuhkan");}
    if ($password != $kpassword) {
        array_push($errors, "Password yang dimasukkan tidak sama");
    }

    //cek udh ada username atau email yg sama apa blom
    $cek_user = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $hsl = mysqli_query($conn, $cek_user);
    $user = mysqli_fetch_assoc($hsl);

    if ($user) {
        if ($user['username'] == $username) {
            array_push($errors, "Username sudah dipakai");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email sudah terdaftar");
        }
    }

    //daftarin user klo udh gaada errors
    if (count($errors) == 0) {
        $enkrippassword = md5($kpassword); //enkrip password dulu

        $query = "INSERT INTO users (nama, username, email, password)
        VALUES('$nama', '$username', '$email', '$enkrippassword')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['sukses'] = "Login berhasil";
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@100;200;300;400;500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="register.css">
    <link rel="icon" href="icon.svg">
    <title>Nyari Dana</title>
</head>

<body>
	<div class="container">
		<div class="img">
			<img src="icon.svg">
		</div>
		<div class="daftar">
			<form action="" method="POST">
                <?php include('errors.php'); ?>
				<h2 class="title">Daftar</h2>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <input type="text" class="input" placeholder="nama" name="nama" value="<?php echo $nama; ?>" required>
                    </div>
                 </div>

           		<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
           		   <div class="div">
           		   		<input type="text" class="input" placeholder="username" name="username" value="<?php echo $username; ?>" required>
           		   </div>
           		</div>

                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                         <input type="email" class="input" placeholder="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                 </div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" placeholder="password" name="password" required>
            	   </div>
            	</div>

                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <input type="password" class="input" placeholder="konfirmasi password" name="kpassword" required>
                 </div>
                </div>

            	<button name="daftar" class="btn" value="Daftar">Daftar</button>
                <p>Sudah punya akun?<span><a href="login.php">Login di sini!</a></span></p>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>