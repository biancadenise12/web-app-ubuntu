<?php
$host = 'a7f2f4ab8510';
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connected to MYSQL';

?>
