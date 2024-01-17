<?php
include'Connection.php';


echo "delete page";

$id = $_POST['Id'];

$sql = "DELETE FROM login WHERE Id=$id";

$query = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header('location:http://localhost/project1/table/index.php');

?>
