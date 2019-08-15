<?php
require "db.php";

if (isset($_POST["inputName"])) {
    $sql = "INSERT INTO users (id, fullname) VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([null, $_POST["inputName"]]);

    header('Location: /index.php');
}