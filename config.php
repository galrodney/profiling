<?php
$db_host = 'your_database_host';
$db_user = 'profile';
$db_pass = '';
$db_name = 'crud_db';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
