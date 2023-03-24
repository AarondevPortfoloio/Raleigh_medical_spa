<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected successfully";

CloseCon($conn);

?>
