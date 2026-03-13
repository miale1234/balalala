<?php
$conn = new mysqli("localhost", "root", "", "login");
if ($conn->connect_error) die("Eroare: " . $conn->connect_error);
?>