<h1>Liste de mes articles</h1>

<div class="container">
    <div class="row">
        @foreach ($mes_donnees_a_afficher as $item)
        <p> {{$item->id}} : {{ $item->nom }} </p>
        @endforeach
    </div>
</div>
