<?php
$connect = new mysqli('localhost:3306', 'root', 'root', 'andrievsky');

if ($connect->connect_error) {
    die('error connection');
}
