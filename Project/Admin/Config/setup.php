<?php

#Database Connection
include('config/connection.php');

#Constants:
DEFINE('D_TEMPLATE','Template');

#Functions:

include ('Functions/data.php');

if(isset($_GET['page'])) {

$pageid=$_GET['page'];

}else {

 $pageid= 1;

}

#pagesetup

$page= data_page($dbc,$pageid);

$q="SELECT * FROM users WHERE email='$_SESSION[username]'";
$r=mysqli_query($dbc,$q);


$user= mysqli_fetch_assoc($r);

?>