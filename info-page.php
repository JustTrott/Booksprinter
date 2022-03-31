<?php
session_start();
?>
<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "", "shop");
// redirect to the homepage if item id is not specified, happens if user is trying to access the info page directly
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
    <?php include('header.html'); ?>
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