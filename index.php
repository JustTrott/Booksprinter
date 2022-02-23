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
                    <a href="Registration.php" class="nav-text">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-text">About</a>
                </li>
            </ul>
        </nav>
        <div id="reg-form" style="display: none;">
            <fieldset>
                <legend>Log in</legend>
                <form action="index.php" method="POST">
                    Username:<br> <input type="text" name="login"><br>
                    Password:<br> <input type="password" name="password"><br>
                    <input class="form-button" type="submit" value="Submit"><br>
                    <div class="form-button" reg-button></div>
                </form>
            </fieldset>
        </div>
        <div id="show-login"></div>
    </header>
    <section id="content">

        <aside id="left-sidebar">
            <div id="filter-title-box">
                <h3 id="filter-title">Filter by: Genre</h3>
            </div>
            <ul id="genre-list">
                <li class='genre-item'><a href="index.php?genre=Fantasy" style="font-weight: <?php if(isset($_GET['genre']) && $_GET['genre'] == 'Fantasy') {echo 1000;} else {echo 300;} ?> ">Fantasy</a></li>
                <li class='genre-item'><a href="index.php?genre=Romance" style="font-weight: <?php if(isset($_GET['genre']) && $_GET['genre'] == 'Romance') {echo 1000;} else {echo 300;} ?> ">Romance</a></li>
                <li class='genre-item'><a href="index.php?genre=Comedy" style="font-weight: <?php if(isset($_GET['genre']) && $_GET['genre'] == 'Comedy') {echo 1000;} else {echo 300;} ?> ">Comedy</a></li>
                <li class='genre-item'><a href="index.php?genre=Action" style="font-weight: <?php if(isset($_GET['genre']) && $_GET['genre'] == 'Action') {echo 1000;} else {echo 300;} ?> ">Action</a></li>
                <li class='genre-item'><a href="index.php?genre=Drama" style="font-weight: <?php if(isset($_GET['genre']) && $_GET['genre'] == 'Drama') {echo 1000;} else {echo 300;} ?> ">Drama</a></li>
                <li class='genre-item'><a href="index.php?genre=Adventure" style="font-weight: <?php if(isset($_GET['genre']) && $_GET['genre'] == 'Adventure') {echo 1000;} else {echo 300;} ?> ">Adventure</a></li>
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
                    <div class="card-image"
                        style="background-image: url('images/covers/<?php echo $row["cover_path"]; ?>.jpg');">
                    </div>
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