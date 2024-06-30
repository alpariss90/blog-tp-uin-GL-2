<htm>
    <head>
        <title>Liste des categories</title>
    </head>
    <body>
             <h1>Formulaire modification de la categorie {{$categorie->id}} </h1>

             <form action="/categorie/edit" method="post">
                @csrf
                <label>Libelle</label> <input type="text"name='libelle' value="{{$categorie->libelle}}" required />
                <input type="hidden" value="{{$categorie->id}}" name="id"/>
                <input type="submit" value="Modifier" style="background-color: green; color: white" />
             </form>

    </body>
</htm>