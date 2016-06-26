<?php

#start session
session_start();

#Database Connection
include('config/connection.php');

if($_POST){

 $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
 $r = mysqli_query($dbc,$q);

 if(mysqli_num_rows($r)==1){

             $_SESSION['username'] = $_POST['email'];
             header('Location: index.php');

 }
 else{

 echo "Invalid Email Id/Password";

 }
}

?>

<html>
<head>

<title> Title  </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

include('config/css.php');
include('config/js.php');

?>

</head>

<body>

    <!--<h1> <i class="fa fa-camera-retro fa-4x"></i> Hello World </h1>   -->


    <div id="wrap">

    <?php //include(D_TEMPLATE.'/navigation.php'); ?>
  <div class="container">

    <div class="row">

          <div class="col-md-4 col-md-offset-4">

          <div class="panel panel-info">
            <div class"panel-heading">   <h4> Login </h4> </div>
             <div class="panel-body">

    <form action="login.php" method="post">
          <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>

          <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <!--
          <div class="checkbox">
               <label>
               <input type="checkbox"> Check me out
               </label>
          </div>

          -->
          <button type="submit" class="btn btn-default">Submit</button>

          <a href="signup.php" class="btn btn-default" role="button">Sign Up</a>
    </form>
    </div> <!-- End of panel body-->
    </div>

          </div>

    </div>


  </div>

     </div>

    <?php //include(D_TEMPLATE.'/footer.php'); ?>
</body>
</html>