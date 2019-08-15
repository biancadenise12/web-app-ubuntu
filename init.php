<?php
require "db.php";

$sql = "INSERT INTO users (id, firstname) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([null, "MarkG!"]);

header('Location: /index.php');