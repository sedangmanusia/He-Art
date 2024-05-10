<?php
    session_start();
    $message = "";
    if(isset($_POST["login"])){
        if(empty($_POST["username"]) || empty($_POST["password"])){
            $message = "<div class='warning'>Harus diisi</div>";
    } else {
        $email = "aku@gmail.com";
        $password = "pass";

        if($_POST["username"] == $email){
            if($_POST["password"] == $password){
                $_SESSION['email'] = $_POST['username'];
                header("location: dashboard.php");
        } else {
            $message = "<div class='warning'>Password salah</div>";
        } 
        } else {
            $message = "<div class='warning'>Email salah</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    >
</head>
<body>
    <header align="center">
        <img src="logo.jpg" alt="My Website Logo" width="200" height="200">
    </header>
    <main>
        <h1 align="center">Login</h1>
        <h3 align = "center">"Seni adalah jalan bagi saya untuk mengekspresikan perasaan, mimpi, dan pandangan hidup saya."</h3>
        <h4 align = "center"> - Affandi</h4>
        <form action = "" method = "POST">
        <?=$message?>
        <table align="center">
            <tr>
                <td align="right">
                    <label for="username">Username:</label>
                </td>
                <td>
                    <input type="text" id="username" name="username">
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" id="password" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input name="login" type="submit" class="btn btn-primary">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <p>Belum punya akun? <a href="register.html">Register</a></p>
                </td>
            </tr>
        </table>
        </form>


    </main>
	<footer align = "center">
        <p>Copyright © He!Art 2024</p>
    </footer>
</body>
</html>