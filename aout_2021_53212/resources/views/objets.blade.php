@extends('cannevas')
@section('title', "Objets")

@section('objet')

<table id="cannevas" class="table table-striped">
    <tr>
        <th> nom du dépôt </th>
        <th> nom du contributeur </th>
        <th> nombre de commits </th>
    </tr>
    @foreach($depots as $depot)
    <tr>
        <th> <a href='javascript:void(0)' onclick="myAjax('{{$depot->id_repo}}')"> {{$depot->nom_depot}} </a> </th>
        <th> {{$depot->nom_contributor}} </th>
        <th> {{$depot->message_commit}} </th>
    </tr>
    @endforeach
</table>
<div id="detailDepot">

</div>


<script>
    //"/api/repositories/{{$depot->id_repo}}"
    function myAjax(id) {
        $("#detailDepot").empty();
        $.getJSON("api/repositories/" + id, function (data, status) {
            if (data.nomDepot != null) {
                //titre repertoire
                let title = document.createElement("h2");
                title.innerHTML = "Nom du dépôt";
                document.querySelector("#detailDepot").appendChild(title);
                //nom repertoire
                let titleContent = document.createElement("p");
                titleContent.innerHTML = data.nomDepot;
                document.querySelector("#detailDepot").appendChild(titleContent);
                //titre user
                let titleUser = document.createElement("h2");
                titleUser.innerHTML = "Nom de l'utilisateur";
                document.querySelector("#detailDepot").appendChild(titleUser);
                //nom user
                let titleUserContent = document.createElement("p");
                titleUserContent.innerHTML = data.nom;
                document.querySelector("#detailDepot").appendChild(titleUserContent);
                //titre commits
                let titleCommit = document.createElement("h2");
                titleCommit.innerHTML = "Liste des commits";
                document.querySelector("#detailDepot").appendChild(titleCommit);
                //commits
                let ul = document.createElement("ul");
                for (let i = 0; i < data.commits.length; i++) {
                    let li = document.createElement("li");
                    li.innerHTML = "[" + data.commits[i]["date"] + "] " + data.commits[i]["commit"];
                    ul.appendChild(li);
                    let espace = document.createElement("br");
                    ul.appendChild(espace);
                }
                document.querySelector("#detailDepot").appendChild(ul);
            } else {
                let title = document.createElement("h2");
                title.innerHTML = "Aucun commit détecté";
                document.querySelector("#detailDepot").appendChild(title);
            }
        });
    }

</script>

@endsection
