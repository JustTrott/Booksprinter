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
    <?php include('header.html'); ?>
    <section id='content'>
    </section>
    <?php include('footer.html'); ?>
</body>