@extends('home')

@section('contenu')
    <br>
    <h3 class="text-center">Ajouter une nouvel Catégorie</h3>
    <br>
    <form class="form-inline" action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Nom de la catégorie</label>
            <input name="name" type="text" class="form-control"  placeholder="Nom de la catégorie">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
    </form>

@endsection()