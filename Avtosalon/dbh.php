<?php

$conn = mysql_connect("localhost", "root", "", "user");


if (!$conn) {
 die("Connection failed: ".mysql_connect_error());
}

?>