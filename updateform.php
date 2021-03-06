<?php
require ("assets/includes/functions.php");
require ("assets/includes/navbar.php");
$id = $_GET["id"];
$row = getAfspraak();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="text-center">
    <div class="container">
      <form action="update.php" method="post">
        <p class="my-4">
            <label for="spelers">Spelers:</label>
            <input type="text" name="spelers" id="spelers" value="<?php echo 
            $row["spelers"] ?>" required>
        </p>
        <p class="my-4">
            <label for="uitlegger">uitlegger:</label>
            <input type="text" name="uitlegger" id="uitlegger" value="<?php echo 
            $row["uitlegger"] ?>" required>
        </p>
        <p class="my-4">
            <label for="date">Tijd:</label>
            <input type="time" name="date" id="date" value="<?php echo 
            $row["date"] ?>" required>
        </p>
        <input type="number" name="id" value="<?php echo $id ?>" hidden>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</body>
</html>