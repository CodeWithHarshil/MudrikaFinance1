<?php 

$server = "localhost";
$user = "mudr_finance";
$pass = "Hz6D8j39F+Cnyr+8";
$database = "mudr_finance";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>