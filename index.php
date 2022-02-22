<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "", "shop")
?>

<html>

<head>
    <title>Booksprinter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="favicon.ico">

</head>

<body>
    <header id="header">
        <a href="index.php">
            <img src="images/logo_with_text_hor.png" alt="Booksprinter" id="header-image">
        </a>
        <nav class="nav">
            <ul>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Home</a>
                </li>
                <li class="nav-item">
                    <a href="Registration.php" class="nav-text">Light Novels</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-text">About</a>
                </li>
            </ul>
        </nav>
        <div id="reg">
            <fieldset>
                <legend>Log in</legend>
                <form action="index.php" method="POST">
                    Username:<br> <input type="text" name="login"><br>
                    Password:<br> <input type="password" name="password"><br>
                    <input type="submit" value="Submit"><br>
                </form>
            </fieldset>
        </div>
    </header>
    <section id="content">

        <aside class="sidebar" id="genre-menu">
            <ul>
                <li><a href="index.php?genre=Fantasy" class='genre-item'>Fantasy</a></li>
                <li><a href="index.php?genre=Romance" class='genre-item'>Romance</a></li>
                <li><a href="index.php?genre=Comedy" class='genre-item'>Comedy</a></li>
                <li><a href="index.php?genre=Action" class='genre-item'>Action</a></li>
                <li><a href="index.php?genre=Drama" class='genre-item'>Drama</a></li>
                <li><a href="index.php?genre=Adventure" class='genre-item'>Adventure</a></li>
            </ul>
        </aside>
        <div id="cards">
            <?php
            $query = "SELECT book_id, name, cover_path, price FROM books";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)) {
            ?>
            <a href="info-page.html?id=<?php echo $row["book_id"]; ?>">
                <div class="card">
                    <img src="images/covers/<?php echo $row["cover_path"]; ?>.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text"><?php echo $row["name"]; ?></p>
                    </div>
                    <p class="card-price">US $<?php echo $row["price"] ?></p>
                </div>
            </a>
            <?php
            }
            ?>
        </div>
    </section>
    <div id="footer">
        <img src="images/logo_with_text.png" id="footer-image">
        <nav class="nav">
            <ul>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Home</a>
                </li>
                <li class="nav-item">
                    <a href="Registration.php" class="nav-text">Light Novels</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-text">About</a>
                </li>
            </ul>
        </nav>
        <p id="footer-text">Made with Love❤️</p>
    </div>
    <script src="script.js"></script>
</body>

</html>