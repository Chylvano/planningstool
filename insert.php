<?php 
	$db = mysqli_connect('localhost', 'root', '', 'planningstool');

	$name = "";
    $date = "";
    $speeltijd = "";
	$uitlegger = "";
	$spelers = "";
	$image = "";
	$description = "";
	$expansions = "";
	$skills = "";
	$url = "";
	$min_players = "";
	$max_players = "";
	$explain_minutes = "";

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
        $date = $_POST['date'];
        $speeltijd = $_POST['speeltijd'];
		$uitlegger = $_POST['uitlegger'];
		$spelers = $_POST['spelers'];
		$image = $_POST['image'];
		$description = $_POST['description'];
		$expansions = $_POST['expansions'];
		$skills = $_POST['skills'];
		$url = $_POST['url'];
		$min_players = $_POST['min_players'];
		$max_players = $_POST['max_players'];
		$explain_minutes = $_POST['explain_minutes'];
		

		mysqli_query($db, "INSERT INTO planning (name, date, speeltijd, uitlegger, spelers, image, description, expansions, skills, url, min_players, max_players, explain_minutes)
		VALUES ('$name', '$date', '$speeltijd', '$uitlegger', '$spelers', '$image', '$description', '$expansions', '$skills', '$url', '$min_players', '$max_players', '$explain_minutes')"); 
		header('location: afspraken.php');
    }
?>
