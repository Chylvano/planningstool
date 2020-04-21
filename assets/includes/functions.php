<?php

function connect()
{
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "planningstool";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    return $conn;
}

catch(PDOException $e)
    {
    echo "connection failed: " . $e->getMessage();
    }
}


function getAll(){
    $conn = connect();
    $stmt = $conn->prepare('SELECT * FROM games ORDER BY NAME');
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rows = '';
    $char = '';
    return $result;
}

function getOne(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM games where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}
?>

