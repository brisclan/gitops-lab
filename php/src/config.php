<?php
//mysqli_connect("servername","mysql username","password",'database')
$conn = mysqli_connect("db","mysqluser","UFVGeHCRaBJO0gzK1KG2",'db');

if(!$conn)
{
    echo "cannot connet to the server";
}

?>
