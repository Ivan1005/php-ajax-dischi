<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <title>dischi</title>
    </head>
    <body>
        <header>
            <div class="container">
                <a href=""><img src="https://cdn.iconscout.com/icon/free/png-256/spotify-11-432546.png" alt="Spotify-logo"></a>
            </div>
        </header>
        <main>
            <?php foreach ($database as $cd) {?>
                <div class="box">
                    <img src="<?php echo $cd['poster']; ?>" alt="<?php echo $cd['title']; ?>">
                    <h3><?php echo $cd['title']; ?></h3>
                    <h4 ><?php echo $cd['author']; ?></h4>
                    <h4 ><?php echo $cd['year']; ?></h4>
                </div>
            <?php }?>
        </main>
    </body>
</html>
