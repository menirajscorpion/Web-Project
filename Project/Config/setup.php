<?php

// Setup File
//Data base connection here

$dbc=mysqli_connect('localhost','dev2','12345','atomcms2') OR die('Could not connect because: '.mysqli_connect_error());

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

?>