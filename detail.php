<?php 
require ("assets/includes/functions.php");
$result= getOneAfspraak();
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
        <a class="backbutton" href="afspraken.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a><br>
        <div class="row mx-3">
            <div class="mt-3">
                <h2 class="mb-3"><?=$result['name']?></h2>
            </div>
                <div class="row">
                <?php if ($result['expansions'] === null) {
                $result['expansions'] = "geen";
                }?>
                <table class="table">
                <thead>
                <tr>
                    <th>expansions</th>
                    <th>Skills</th>
                    <th>Spelers</th>
                    <th>Speelminuten</th>
                    <th>Uitlegminuten</th>
                </tr>
                </thead>
                <tr>
                  <div class="mb-5">
                    <td><div><?= $result['expansions']?></div></p></td>
                    <td><p><?= $result['skills'] ?></p></td>
                    <td><p><?= $result['min_players'] ?> - <?= $result['max_players']?> players</p></td>
                    <td><p><?= $result['speeltijd'] ?></p></td>                        
                    <td><p><?= $result['explain_minutes'] ?></p></td>
                  </div>
                </tr>
            </div>
            </table>
            <div class="jumbotron">
                <h2>Description</h2>
                <?= $result['description'] ?>
            </div>
                <img class="w-25 m-5" src="assets/images/<?=$result['image']?>">
                <div class="col-4 mt-5 jumbotron ml-5">
                <h4 class="mb-5">Hoelaat: <?=$result["date"]?></h4>
                <h4 class="my-5">Uitlegger: <?=$result["uitlegger"]?></h4>
                <h4 class="mt-5">Speeltijd: <?=$result["speeltijd"]?> Minuten</h4>
                <h4 class="mt-5">Spelers: <?=$result["spelers"]?></h4>
            </div>
                <p class="mt-4">url: <a href="<?= $result['url']?>"><?= $result['url'] ?></a></p>
            </div>
         </div>
    </div>
</div>
</body>
</html>