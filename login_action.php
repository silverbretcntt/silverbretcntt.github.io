<?php
include "conection.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * from tbl_user WHERE username='$username' and password='$password'";
$query = mysqli_query($conn, $sql);
if ($query) {
$row = mysqli_fetch_assoc($query);
if ($row) {
	$_SESSION["username"] = $row["username"];
    $_SESSION["role"] = $row["role"];
	if ($row["role"] == 1)
		header("Location: admin.php");
	else
		header("Location: index.php");
}
else echo mysqli_error($conn);
}
else echo mysqli_error($conn);

?>