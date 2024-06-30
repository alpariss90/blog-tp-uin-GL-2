<htm>
    <head>
        <title>Liste des categories</title>
    </head>
    <body>
             <h1>Liste des categories <a href="/categorie/form">AJOUTER UN NOUVEAU RECORD</a></h1>

             <table border="1" width="100%">
                <tr>
                <th>#</th>
                <th>LIBELLE</th>
                <th>ACTIONS</th>
                </tr>
    @foreach ($categories as $c)
    <tr>
                <td>{{$c->id}}</td><td>{{$c->libelle}}</td><td>
                <a href="/categorie/form-edit/{{$c->id}}">edit</a> || <a href="/categorie/delete/{{$c->id}}" onClick="return window.confirm('Etes vous sûre de vouloir supprimer cet enrregistrement')">drop</a>
                </td>
    </tr>
    @endforeach
              
             </table>
    </body>
</htm>