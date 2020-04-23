<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysyarikat";

$connect = mysqli_connect($servername, $username, $password, $dbname);

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Kuala_Lumpur');
$time = date('Y/m/d H:i:s');

?>
//function base64_url_decode($input){
// return base64_decode(strtr($input, '-_,', '+/='));
// }

//function base64_url_encode($input){
// return strtr(base64_encode($input), '+/=', '-_,');
// }
