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
    <link rel="stylesheet" type="text/css" href="contacts.css">
    <link rel="icon" href="favicon.ico">

</head>
<body>
    <?php include('header.html'); ?>
    <section id='content'>
        <div id="contacts">
            <h1 class="main-header">Contact us</h1>
            <h2 class="sub-header">Feel free to contact our Light Novel advisor or Technical Support if you having any troubles.</h2>
            <table id="contact-table">
                <tr>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>E-mail</th>
                </tr>
                <tr>
                    <td>Technical support</td>
                    <td>John</td>
                    <td>+7-777-293-45-65</td>
                    <td>john_23@uco.zk</td>
                </tr>
                <tr>
                    <td>Light Novel Advisor</td>
                    <td>Michael</td>
                    <td>+7-701-155-33-21</td>
                    <td>themizel@gmail.com</td>
                </tr>
                <tr>
                    <td>Light Novel Advisor #2</td>
                    <td>Filip</td>
                    <td>+7-747-205-73-03</td>
                    <td>filipino@mail.com</td>
                </tr>
                <tr>
                    <td>Light Novel Advisor #3 (R18)</td>
                    <td>Evgeny</td>
                    <td>+7-800-432-98-23</td>
                    <td>rissmanfor4@gmail.com</td>
                </tr>
            </table>
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