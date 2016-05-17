<?php

echo $my_env_var = getenv('JAWSDB_URL');


$url = parse_url(getenv($my_env_var));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



// Show all information, defaults to INFO_ALL
phpinfo();

?>