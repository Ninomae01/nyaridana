<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();

//cek udh login apa blom
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['email'] = $row['email'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
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
	<link rel="stylesheet" href="login.css">
    <link rel="icon" href="icon.svg">
    <title>Nyari Dana</title>
</head>

<body>
	<div class="alert alert-warning" role="alert">
		<?php echo $_SESSION['error']?>
	</div>

	<div class="container">
		<div class="img">
			<img src="icon.svg">
		</div>
		<div class="login">
			<form action="" method="POST">
				<h2 class="title">Login</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" id="username" name="username" value="<?php echo $username; ?>" class="input" placeholder="username" required>
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" id="password" name="password" value="<?php echo $_POST['password']; ?>" class="input" placeholder="password" required>
            	   </div>
            	</div>

            	<a href="#">Lupa Password?</a>

            	<input type="submit" name="login" class="btn" value="Login"></a>
                <p>Belum punya akun?<span><a href="register.php">Daftar yuk!</a></span></p>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>