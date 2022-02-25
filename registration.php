<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "", "shop");

?>

<html>

<head>
    <title>Booksprinter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="registration.css">
    <link rel="icon" href="favicon.ico">

</head>

<body>
    <header class="header">
        <a href="index.php">
            <img src="images/logo_with_text_hor.png" alt="Booksprinter" class="header-image">
        </a>
        <nav class="nav">
            <ul>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Home</a>
                </li>
                <li class="nav-item">
                    <a href="registration.php" class="nav-text">Registration</a>
                </li>
            </ul>
        </nav>
        <div class="login-popup">
            <div class="close-button">&times;</div>
            <div class="form">
                <h2>Log in</h2>
                <form action="index.php" method="POST">
                    <div class="form-element">
                        <label for="login">Username:</label>
                        <input type="text" name="login" placeholder="Enter username">
                    </div>
                    <div class="form-element">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-element">
                        <input class="form-button" type="submit" name="submit-login" value="Log in">
                    </div>
                </form>
            </div>
        </div>
        <div class="show-login">Log in</div>
    </header>
    <section class="content">
        <div class="registration">
            <div class="form">
                <h2>Registration</h2>
                <form action="registration.php" method="POST">
                    <div class="form-element">
                        <label for="login">Username:</label>
                        <input type="text" name="login" placeholder="Enter username">
                    </div>
                    <div class="form-element">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-element">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-element">
                        <label for="r_password">Repeat password:</label>
                        <input type="password" name="r-password" placeholder="Repeat password">
                    </div>
                    <div class="form-element">
                        <input class="form-button" type="submit" name="submit-reg" value="Sign up">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="footer">
        <img src="images/logo_with_text.png" class="footer-image">
        <nav class="nav">
            <ul>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Home</a>
                </li>
                <li class="nav-item">
                    <a href="registration.php" class="nav-text">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-text">About</a>
                </li>
            </ul>
        </nav>
        <p class="footer-text">Made with Love❤️</p>
    </div>
    <script src="index.js"></script>
</body>

</html>

<?php
if (isset($_POST['submit-reg'])) {
    if ($_POST['login'] == "" || $_POST['email'] == "" || $_POST['password'] == "" || $_POST['r-password'] == "") {
        die("<script>alert('Not all fields were filled!')</script>");
    }
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r_password = $_POST['r-password'];
    if ($password==$r_password){
        $query = "INSERT INTO users (login, email, password) VALUES ('$login','$email','$password')";
        $result = mysqli_query ($conn, $query);	
        if ($result == 'TRUE'){
            header('Location: index.php?reg=success');
        }
        else {
            die("<script>alert('An error has occured while registering.')</script>");
        }
    }
    else {
        die("<script>alert('Error: passwords do not match.')</script>");
    }

}
?>