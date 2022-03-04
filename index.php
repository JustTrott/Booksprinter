<?php
session_start();
?>
<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "", "shop");
if (isset($_GET['reg']) && $_GET['reg'] == 'success') {
    echo ("<script>alert('Register was succesfull! Returning to homepage...')</script>");
}
?>

<html>

<head>
    <title>Booksprinter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="favicon.ico">
    <?php
    if (isset($_POST['submit-login'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        if ($row['password'] == $password) {
            $_SESSION['login'] = $login;
        }
        else {
            die('<script>alert("Login or password is incorrect!")</script>');
        }
    }
    ?>

</head>

<body>
    <?php include('header.html'); ?>

    <section class="content">
        <aside class="left-sidebar">
            <div class="filter-title-box">
                <h3 class="filter-title">Filter by: Genre</h3>
            </div>
            <ul class="genre-list">
                <?php
                $query = "SELECT genre_name FROM genres ORDER BY genre_name ASC";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)) {
                    echo "<li class='genre-item'><a href=\"index.php?genre={$row['genre_name']}\"";
                    if(isset($_GET['genre']) && $_GET['genre'] == $row['genre_name']) {
                        echo "style=\"font-weight: 1000;\"";
                    }
                    echo ">{$row['genre_name']}</a></li>";
                }
                ?>
                <li class='genre-item clear-filters-button'>
                    <a href='index.php'>Clear Filters</a>
                </li>
            </ul>
        </aside>
        <div class="cards">
            <?php
            if(isset($_GET['genre'])){
                $query = "SELECT books.book_id, books.name, books.cover_path, books.price 
                FROM books, genres, books_genres
                WHERE genres.genre_name='{$_GET['genre']}' AND genres.genre_id = books_genres.genre_id AND books.book_id = books_genres.book_id";
            }
            else{
                $query = "SELECT book_id, name, cover_path, price FROM books";
            }
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)) {
            ?>
            <a class="card-container" href="info-page.php?id=<?php echo $row["book_id"]; ?>">
                <div class="card">
                    <div class="card-image"
                        style="background-image: url('images/covers/<?php echo $row["cover_path"]; ?>.jpg');">
                    </div>
                    <div class="card-text-container">
                        <p class="card-text"><?php echo $row["name"]; ?></p>
                    </div>
                    <div class="card-price-container">
                        <p class="card-price">US $<?php echo $row["price"] ?></p>
                    </div>
                </div>
            </a>
            <?php
            }
            ?>
        </div>
    </section>
    <section class="tips">
        <div class="video-plug">
            <h1 class="video-header">Need some help?</h1>
            <p class="video-subheader">Here's some video that may help you to chose which Light Novel to start with!</p>
            <iframe class="video-embed" src="https://www.youtube.com/embed/-cXIcyfPJ_0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
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