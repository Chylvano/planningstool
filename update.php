<?php
$driver = "mysql:dbname=planningstool;host=127.0.0.1";
$user = "root";
$password = "";

$id = $_POST["id"];
$game = $_POST["game"];
$date = $_POST["date"];
$spelers = $_POST["spelers"];
$uitlegger = $_POST["uitlegger"];

$pdo = new PDO($driver, $user, $password);
$stmt = $pdo->prepare("UPDATE planning SET date = :date, spelers = :spelers, uitlegger = :uitlegger WHERE id = :id"
    );
$stmt->bindParam(":id", $id);
$stmt->bindParam(":date", $date);
$stmt->bindParam(":spelers", $spelers);
$stmt->bindParam(":uitlegger", $uitlegger);
$stmt->execute();
header('location: afspraken.php');
?>