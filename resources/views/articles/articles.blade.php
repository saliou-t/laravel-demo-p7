<h1>Liste de mes articles</h1>

<div class="container">
    <div class="row">
        @foreach ($mes_donnees_a_afficher as $item)
            <p> Catégorie : <strong> {{$item->categorie}} </strong></p>
            <p>
               Nom : <strong> {{ $item->nom }} </strong>
            </p> 
            <a href="/article/{{$item->id}}">voir details</a>
            <hr>
        @endforeach
    </div>
</div>
