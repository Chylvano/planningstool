<?php 
	$db = mysqli_connect('localhost', 'root', '', 'planningstool');

	$game = "";
    $date = "";
    $spelers = "";
	$uitlegger = "";

	if (isset($_POST['save'])) {
		$game = $_POST['game'];
        $date = $_POST['date'];
        $spelers = $_POST['spelers'];
        $uitlegger = $_POST['uitlegger'];

		mysqli_query($db, "INSERT INTO planning (game, date, spelers, uitlegger) VALUES ('$games', '$date', '$spelers', '$uitlegger')"); 
		header('location: afspraken.php');
    }
?>
