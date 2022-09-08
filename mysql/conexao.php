<?php

// $server = "workoutmysql.ch8ztzhdytvl.us-east-1.rds.amazonaws.com";
// $user = "admin";
// $password = "workoutmysql";
// $database = "workoutmysql";
// $port = 3306;

// $mysqli = new mysqli($server, $user, $password, $database, $port);
// if ($mysqli->connect_errno)
//     echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " .  $mysqli->connect_error;

$server = "localhost";
$user = "id19538403_root";
$password = "15C25v35l45l$";
$database = "id19538403_workout";

$mysqli = new mysqli($server, $user, $password, $database);
if ($mysqli->connect_errno)
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " .  $mysqli->connect_error;
