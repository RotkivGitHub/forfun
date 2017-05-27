<?php require_once 'admin/api/api.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/logs.log');
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php echo $info["site_title"]; ?>
    </title>

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="to-top animated" id="to-top">
    <i class="fa fa-arrow-circle-up fa-4x" aria-hidden="true"></i>
    <br>
    Вверх
</div>

<?php include 'admin/views/contactUs.php'; ?>

<?php include 'admin/views/header.php'; ?>


<div>
    <div class="container wrapper">
        <div class="row">
            <?php include 'admin/views/left-block.php'; ?>
            <?php include 'admin/views/main-block.php'; ?>
            <?php include 'admin/views/right-block.php'; ?>
        </div>
    </div>
</div>

<?php include 'admin/views/footer.php'; ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
</body>
</html>