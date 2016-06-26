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
     <div class="container">
          <h1> <?php echo $page['header']; ?> </h1>

          <p><?php echo $page['body'];?> </p>
     </div>

     </div>

    <?php include(D_TEMPLATE.'/footer.php'); ?>
</body>
</html>