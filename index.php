<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
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
          <script id="entry-template" type="text/x-handlebars-template">
            <div class="box">
                <img src="{{poster}}" alt="<?php echo $cd['title']; ?>">
                <h3>{{title}}</h3>
                <h4 >{{year}}</h4>
                <h4 >{{author}}</h4>
            </div>
          </script>
        </main>

        <script src="js\script.js" charset="utf-8"></script>
    </body>
</html>
