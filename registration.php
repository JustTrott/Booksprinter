<?php
session_start();
?>
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
    <?php include('header.html');?>
    </header>
    <section class="content">
        <div class="registration">
            <div class="form">
                <h2>Registration</h2>
                <form action="registration.php" method="POST">
                    <div class="form-element">
                        <label for="login">Username:</label>
                        <input type="text" name="login" placeholder="Enter username" required>
                    </div>
                    <div class="form-element">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-element">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-element">
                        <label for="r_password">Repeat password:</label>
                        <input type="password" name="r-password" placeholder="Repeat password" required>
                    </div>
                    <div class="form-element">
                        <input class="form-button" type="submit" name="submit-reg" value="Sign up">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include('footer.html'); ?>
    <?php
    if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
    ?>
    <script>
        let showLoginButton1 = document.querySelector('.show-login');
        let newNode = document.createElement('div');
        newNode.class = 'nav-text';
        newNode.innerHTML = 'Hello, <?php echo $login ?>!';
        showLoginButton.parentNode.replaceChild(newNode, showLoginButton1);
    </script>
    <?php }
    ?>
</body>

</html>

<?php
// registration of a new user
if (isset($_POST['submit-reg'])) {
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