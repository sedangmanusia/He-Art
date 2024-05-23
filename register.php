<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
        <img src="logo.jpg" alt="He!Art LogoS" width="200" height="200">
    </header>
    <main>
        <h1 align="center">Register</h1>
        <h3 align="center">"Create your account, create your own beautiful world."</h3>
        <form action="register-proses.php" method="post">
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
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" id="email" name="email">
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
                <td align="right">
                    <label for="confirm-password">Confirm Password:</label>
                </td>
                <td>
                    <input type="password" id="confirm-password" name="confirm-password">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register" name="register">
                </td>
            </tr>
        </table>
        </form>
    </main>
	<footer align = "center">
        <p>Copyright © He!Art 2024 </p>
    </footer>
</body>
</html>
