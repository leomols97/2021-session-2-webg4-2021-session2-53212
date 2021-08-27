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
<table class="table table-striped">
    <tr>
        <th> <a href="/accueil">Home</a> </th>
        <th> <a href="/emplacement">Emplacements</a> </th>
        <th> <a href="/objets">Objets</a> </th>
    </tr>
    <tr>
        <th>Bienvenue</th>
        <th>Par le menu, gérez vos stocks</th>
    </tr>
    <!-- -->
</table>
<div id="detailDepot">

</div>
    @yield('accueil')
    @yield('emplacement')
</body>
<footer>
    WEBG4 - WEB2 - 53212
</footer>

</html>
