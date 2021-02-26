<?php


//Make sure the user is coming from the form
if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {

    //Send user to form page
    header("location: guestbook.php");
}

require('includes/php_setup.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon CSS -->
    <link href="images/mail.png" type="image/png" rel="Mail icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <title>Thank You!</title>
</head>
<body>
<div class="container" id="main">
    <h1 class="text-center">Thank you!</h1>
    <?php
    /*
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    */



    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $linkedin = $_POST['linkedin'];
    $met = $_POST['met'];
    $other = $_POST['other'];
    $msg = $_POST['msg'];
    $format = $_POST['format'];
    $datestamp = date('d/m/y');

    $location = '';

    if($met == 'Other'){
        $location = $other;
    }else{
        $location = $met;
    }


    $sql = "INSERT INTO guestbook VALUES ('$first_name', '$last_name', '$job_title', '$company', '$email', '$linkedin', '$datestamp', '$msg', '$location', '$format')";

    $success = mysqli_query($cnxn, $sql);

    if ($success) {
        echo "<br>";
        echo "<p class='text-center'>Hello $first_name $last_name, 
    I appreciate you for putting time into signing my guestbook!</p>";
    } else {
        echo "<p>Something went wrong</p>";
    }

    ?>
</div>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>