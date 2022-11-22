<?php


$mysqli = new mysqli("localhost", "root", "1234", "basedt", 3306);
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


?>