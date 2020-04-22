<?php 
require ("assets/includes/functions.php");
$result= getOne();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $result['name']?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style3.css">
</head>
<body>
<div class="container">
        <div class="img-thumbnail col">
        <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a><br>
        <div class="row mr-3 ml-3">
            <div class="mt-3">
                <h2><?=$result['name']?></h2>
            </div>
                <hr>
                <div class="row">
                <?php if ($result['expansions'] === null) {
                $result['expansions'] = "geen";
                }?>
                <div class="ml-5"><a>expansions: </a><?= $result['expansions']?></div></p>
                <div class="vl ml-4"></div>
                <p class="ml-4">skills: <?= $result['skills'] ?></p>
                <div class="vl ml-4"></div>
                <p class="ml-4"><?= $result['min_players'] ?> - <?= $result['max_players']?> players</p>
                <div class="vl ml-4"></div>
                <p class="ml-4">speelminuten: <?= $result['play_minutes'] ?></p>
                <div class="vl mb-5 ml-4"></div>
                <p class="ml-4">uitlegminuten: <?= $result['explain_minutes'] ?></p>
            </div>
            <div class="jumbotron">
                <h2>Description</h2>
            <p><?= $result['description'] ?></p>
            </div>
                <img class="w-25 ml-5 mt-5 mr-5" src="assets/images/<?=$result['image']?>">
                <h2 class="ml-5 mt-5"><?=$result['youtube']?></h2>
                <p class="mt-4">url: <a href="<?= $result['url']?>"><?= $result['url'] ?></a></p>
                <a class="mt-4 ml-5" href="plangame.php"><button>game plannen</button></a>
            </div>
         </div>
    </div>
</div>
</body>
</html>