<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>@yield('title')</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>

    <body>
        <h1>Gestion des stocks</h1>

        <table id="cannevas" class="table table-striped">
                @yield('accueil')
                @yield('emplacements')
            <!-- -->
        </table>
    </body>
    <footer>
        WEBG4 - 53212
    </footer>

</html>
