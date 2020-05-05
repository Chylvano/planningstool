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
    return $result;
}

function getOne(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM games where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

function afspraken(){
    $conn = connect();
    $stmt = $conn->prepare('SELECT * FROM planning ORDER BY DATE');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function deleteLocation($id){
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM planning WHERE id= :deleteid");
    $stmt->execute([":deleteid" =>$id]);
}

function addOne($id){
$conn = connect();
$stmt = $conn->prepare("INSERT TO planning VALUES('$id')");
$stmt->execute([":newid" =>$id]);
}

function getAfspraak(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM planning where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

function getOneAfspraak(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM planning where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

?>

