<?php

include 'dbh.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO useraccounts (firstname, lastname, uid, pwd) 
VALUES ('$firstname', '$lastname', '$uid', '$pwd')";
$result = mysqli_query($conn, $sql);

header("Location: registir.html");

?>