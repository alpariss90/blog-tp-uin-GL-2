<htm>
    <head>
        <title>Liste des categories</title>
    </head>
    <body>
             <h1>Formulaire ajout categorie </h1>

             <form action="/categorie/save" method="post">
                @csrf
                <label>Libelle</label> <input type="text"name='libelle'  required />
                <input type="submit" value="AJouter" style="background-color: green; color: white" />
             </form>

    </body>
</htm>