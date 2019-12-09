<?php

// Grab User submitted information
$id = $_POST["manager_number"];
$pass = $_POST["users_pass"];

// Connect to the database
$con = mysql_connect("localhost","as16815","obscure");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("as16815",$con);

$result = mysql_query("SELECT manager_number, passwd FROM manager WHERE manager_number = $id");

$row = mysql_fetch_array($result);

if($row["manager_number"]==$id && $row["passwd"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>