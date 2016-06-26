<?php

#Start the session:
session_start();

if(!isset($_SESSION['username'])) {
     #Take back to Login Page
     header('Location: login.php');

}

?>

<?php include('config/setup.php'); ?>

<html>
<head>

<title> <?php echo $page['title'];?>  </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

include('config/css.php');
include('config/js.php');

?>



</head>

<body>

    <!--<h1> <i class="fa fa-camera-retro fa-4x"></i> Hello World </h1>   -->


    <div id="wrap">

    <?php include(D_TEMPLATE.'/navigation.php'); ?>
    
    <h1> Admin Dashboard </h1>

     </div>

    <?php include(D_TEMPLATE.'/footer.php'); ?>
</body>
</html>