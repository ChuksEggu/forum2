<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'forum2';
$link = mysqli_connect($server, $username,  $password);

if(!$link)
{
    exit('Error: could not establish database connection');
}
if(!mysqli_select_db($link, $database))
{
    exit('Error: could not select the database');
}
?>


