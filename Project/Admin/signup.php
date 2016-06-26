<?php

#Database Connection
include('config/connection.php');

if(isset($_POST['submitted'])==1){

  //mysql_select_db("snippets",$dbc);

  $first=mysqli_real_escape_string($dbc,$_POST['first']);
  $last=mysqli_real_escape_string($dbc,$_POST['last']);
  $email=mysqli_real_escape_string($dbc,$_POST['email']);
  $password=mysqli_real_escape_string($dbc,$_POST['password']);
  
  $sha1=SHA1('$password');

  $q = "INSERT INTO users (first,last,email,password) values('$first','$last','$email','$shal')";
  $r=mysqli_query($dbc,$q);

  If($r) {

         echo "Posted successfully";
         header('Location: login.php');
  }
  else {

         echo $r;
         echo "Could not be posted";

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

  <div class="container">

    <div class="row">

          <div class="col-md-4 col-md-offset-4">

          <div class="panel panel-info">
            <div class"panel-heading">   <h4> Sign Up </h4> </div>
             <div class="panel-body">

    <form action="signup.php" method="post">
          <div class="form-group">
               <label for="name">First Name</label>
               <input type="text" class="form-control" id="first" name="first" placeholder="First Name">
          </div>

          <div class="form-group">
               <label for="name">Last Name</label>
               <input type="text" class="form-control" id="last" name="last" placeholder="Last Name">
          </div>

          <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>

          <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
          <input type="hidden" name="submitted" value="1">

    </form>
    </div> <!-- End of panel body-->
    </div>

          </div>

    </div>


  </div>

</body>
</html>