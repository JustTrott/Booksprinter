<!DOCTYPE html>

<html>

<head>
    <title>Booksprinter</title>
    <meta charset=“UTF-8”>
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
                    <a href="index.php" class="nav-text">Light Novels</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Manga</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Contact</a>
                </li>
            </ul>
        </nav>
        <div id="reg">
            <fieldset>
                <legend>Log in</legend>
                <form action="sign up" method="POST">
                    Username:<br> <input type="text" name="login"><br>
                    Password:<br> <input type="password" name="password"><br>
                    <input type="submit" value="Submit"><br>
                </form>
            </fieldset>
        </div>
    </header>
    <section id="content">

        <aside class="sidebar" id="genre-menu">
        </aside>
        <div id="cards">
            <a href="">
                <div class="card">
                    <img src="images/LN1_cover.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text">Mushoku Tensei: Jobless Reincarnation Light Novel</p>
                    </div>
                    <p class="card-price">US $9.11</p>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img src="images/LN2_cover.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text">Ascendance of a Bookworm Light Novel</p>
                    </div>
                    <p class="card-price">US $7.52</p>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img src="images/LN3_cover.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text">So I'm a Spider, So What? Light Novel</p>
                    </div>
                    <p class="card-price">US $8.38</p>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img src="images/LN3_cover.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text">So I'm a Spider, So What? Light Novel</p>
                    </div>
                    <p class="card-price">US $8.38</p>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img src="images/LN3_cover.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text">So I'm a Spider, So What? Light Novel</p>
                    </div>
                    <p class="card-price">US $8.38</p>
                </div>
            </a>
            <a href="">
                <div class="card no-right-margin">
                    <img src="images/LN3_cover.jpg" class="card-image">
                    <div class="card-text-container">
                        <p class="card-text">So I'm a Spider, So What? Light Novel</p>
                    </div>
                    <p class="card-price">US $8.38</p>
                </div>
            </a>
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
                    <a href="index.php" class="nav-text">Light Novels</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Manga</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-text">Contact</a>
                </li>
            </ul>
        </nav>
        <p id="footer-text">Made with Love❤️</p>
    </div>
    <script src="script.js"></script>
</body>

</html>