<?php
session_start();
?>
<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "", "shop");
if(!isset($_GET['id'])){
    header('Location: index.php');
}
?>

<html>

<head>
    <title>Booksprinter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="info-page.css">
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
        <?php 
            $query = "SELECT description, name, price, cover_path FROM books WHERE book_id={$_GET['id']}";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            ?>
        <div class="item-info">
            <div class="main-text"><?php echo $row['name']; ?></div>
            <div class="desc">
                <div class="main-image">
                    <img src="images/covers/<?php echo $row['cover_path']; ?>.jpg" class="desc-image"
                        alt="<?php echo $row['name']; ?> COVER">
                </div>
                <div class="wrapper">
                    <div class="desc-text"><?php echo $row['description']; ?></p>
                    </div>
                    <div class="buy-container">
                        <div class="price">US $<?php echo $row['price'] ?></div>
                        <div class="buy-button" onclick="alert('The item has been ordered succesfully!');">Buy</div>
                    </div>
                </div>
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
            </ul>
        </nav>
        <p class="footer-text">Made with Love❤️</p>
    </div>
    <?php
    if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
        echo "<script>
        let showLoginButton = document.querySelector('.show-login');

        let newNode = document.createElement('div');

        newNode.class = 'nav-text';
        newNode.innerHTML = 'Hello, {$login}!';
        showLoginButton.parentNode.replaceChild(newNode, showLoginButton);
        </script>";
    }
    ?>
    <script src="index.js"></script>
</body>

</html>