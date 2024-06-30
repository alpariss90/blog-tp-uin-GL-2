<htm>
    <head>
        <title>Liste des article</title>
    </head>
    <body>
             <h1>Formulaire ajout article </h1>

             <form action="/article/save" method="post">
                @csrf
                <label>Titre</label> <input type="text" name='titre'  required /><br>
                <label>Description</label> <input type="text" name='description'  required /><br>
                <label>Date publication</label> <input type="date" name='date_publication'  required /><br>
                <label>Categories</label>
                <select name="categorie" required>
                    <option value="">Selectionner une categorie</option>
                    @foreach ($categories as $c)
                        <option value="{{$c->id}}">{{$c->libelle}}</option>
                    @endforeach
                </select>
                <br>
                <label>Auteurs</label>
                <select name="auteur" required>
                    <option value="">Selectionner un auteur</option>
                    @foreach ($auteurs as $a)
                        <option value="{{$a->id}}">{{$a->nom}}--{{$a->email}}</option>
                    @endforeach
                </select><br>
                <input type="submit" value="AJouter" style="background-color: green; color: white" />
             </form>

    </body>
</htm>