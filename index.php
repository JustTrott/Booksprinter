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
    <h1 class="header-text">Booksprinter</h1>
    <br><br><br><br>
    <header id="header">
        <nav id="nav">
            <ul>
                <li class="nav-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.html">Books</a>
                </li>
                <li class="nav-item">
                    <a href="index.html">Services</a>
                </li>
                <li class="nav-item">
                    <a href="index.html">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.html">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <section id="content">
        <aside id="sidebar">
            <fieldset>
                <legend>Registration</legend>
                <form action="sign up" method="POST">
                    Login: <input type="text" name="login"><br>
                    Password: <input type="password" name="password"><br>
                    Gender:
                    <select name="gender">
                        <option value="m">Мужской</option><br>
                        <option value="f">Женский</option><br>
                    </select>
                    <br></br>
                    <input type="submit" value="Submit"><br>
                    To receive the newsletter in the mail: <input type="checkbox" name="send_news">
                </form>
            </fieldset>
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

    </div>
    <script src="script.js"></script>
</body>

</html>