<?php
require ("assets/includes/functions.php");
require ("assets/includes/navbar.php");
$result = getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Plannen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <form action="insert.php" method="post">
        <p>
        <label for="games">Kies een spel:</label>
            <select id="games">
            <?php foreach ($game as $game) {?>
              <option value=" <?=$game["name"]?>"></option>
            <?php  }?>
            </select>
        </p>
        <p>
            <label for="spelers">Spelers:</label>
            <input type="text" name="spelers" id="spelers" required>
        </p>
        <p>
            <label for="uitlegger">uitlegger:</label>
            <input type="text" name="uitlegger" id="uitlegger" required>
        </p>
        <p>
            <label for="date">Tijd:</label>
            <input type="time" name="date" id="date" required>
        </p>
        <input type="number" name="id" value="<?php echo $id ?>" hidden>
        <input type="submit" class="btn btn-primary" name="save">
    </form>
</body>
</html>
