<htm>
    <head>
        <title>Liste des articles</title>
    </head>
    <body>
             <h1>Liste des articles <a href="/article/form">AJOUTER UN NOUVEAU RECORD</a></h1>

             <table border="1" width="100%">
                <tr>
                <th>#</th>
                <th>CATEGORIE</th>
                <th>TITRE</th>
                <th>DESCRIPTION</th>
                <th>DATE PUBLICATION</th>
                <th>AUTEUR</th>
                <th>ACTIONS</th>
                </tr>
    @foreach ($articles as $c)
    <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->libelle}}</td><td>{{$c->titre}}</td><td>{{$c->description}}</td><td>{{$c->date_publication}}</td><td>{{$c->nom}}--{{$c->email}}</td>
                <td>
                <a href="/article/form-edit/{{$c->id}}">edit</a> || <a href="/article/delete/{{$c->id}}" onClick="return window.confirm('Etes vous sûre de vouloir supprimer cet enrregistrement')">drop</a>
                </td>
    </tr>
    @endforeach
              
             </table>
    </body>
</htm>