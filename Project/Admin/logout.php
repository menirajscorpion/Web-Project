<?php

session_start();

unset($_SESSION['username']);//delete the username key

//session_destroy();//deletes all the keys

echo "Logged out Successfully";


header('Location: login.php');

?>
