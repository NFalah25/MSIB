<?php

$mysqli = new mysqli("127.0.0.1", "root", "", "msib", 3306);

if ($mysqli->connect_error) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
}
