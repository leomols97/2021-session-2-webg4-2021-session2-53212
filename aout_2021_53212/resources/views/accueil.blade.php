@extends('cannevas')
@section('title', "Accueil")

@section('accueil')

<table id="cannevas" class="table table-striped">
    <tr>
        <th> <a href="/accueil">Home</a> </th>
        <th id="pageTitle">Bienvenue</th>
    </tr>
    <tr>
        <th> <a href="/emplacements">Emplacements</a> </th>
        <th>
            Par le menu, gérez vos stocks
        </th>
    </tr>
    <tr>
        <th> <a href="/objets">Objets</a> </th>
    </tr>
    <!-- -->
</table>
<div id="detailDepot">

</div>

@endsection
