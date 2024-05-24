<h1>
    Créer votre première article
</h1>

<form action="/article/traitement" method="POST">
    @csrf
    <tr>
        <td>
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Nom de l'article">
        </td>
        <td>
            <label for="nom">Categorie</label>
            <input type="text" name="categorie" placeholder="Saisir la catégorie de l'article">
        </td>
    </tr>

    <tr>
        <td>
            <label for="nom">Image </label>
            <input type="text" name="image_url" placeholder="Saisire l'url de l'image l'article">
        </td>
        <td>
            <label for="nom">Description</label>
            <input type="text" name="description" placeholder="Saisir la descrtiption de l'article">
        </td>
    </tr>
    <button style="margin-top: 10px; color: white; background-color: blue">Enregistrer</button>
</form>