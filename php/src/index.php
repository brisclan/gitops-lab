<?php
//$host = 'db';
//$user = 'mysqluser';
//$pass = 'UFVGeHCRaBJO0gzK1KG2';
//$mydatabase = 'db';
//$conn = new mysqli($host, $user, $pass, $mydatabase);
include('config.php');
// select query
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
?>

