@extends('cannevas')
@section('title', "Emplacements")

@section('emplacements')

<table id="cannevas" class="table table-striped">
    <tr>
        <th> <a href="/accueil">Home</a> </th>
        <th id="pageTitle">La liste des emplacements</th>
    </tr>
    <tr>
        <th> <a href="/emplacements">Emplacements</a> </th>
        <th>
            <table class="table table-striped">
                <tr>
                    <th> Nom de l'emplacement </th>
                    <th> Nombre d'objets à l'emplacement </th>
                </tr>
                @foreach($emplacements as $emplacement)
                <tr>
                    <th> <a href='javascript:void(0)'> {{$emplacement->nom_emplacement}} </a>
                        @yield('contenuEmplacement')
                    </th>
                    <th> {{$emplacement->nb_objets}} </th>
                </tr>
                @endforeach
            </table>
        </th>
    </tr>
    <tr>
        <th> <a href="/objets">Objets</a> </th>
    </tr>
    <!-- -->
</table>
<div id="detailEmplacement">

</div>

@endsection
