@extends('home')

@section('contenu')
    <br>
    <h3 class="text-center">Ajouter un nouveau produit</h3>
    <br>
    <div class="row">
        <div class="col">
            @if(count($errors))
                <div class="alert alert-danger" role="alert">
                    <ul>

                        @foreach($errors->all() as $message)
                            <li>
                                {{$message}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <form class="form-inline" action="{{route('product.store')}}" method="post">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Nom du produit</label>
            <input name="name" type="text" class="form-control"  placeholder="Nom du produit" value="{{old('name')}}" >
        </div>
        <div class="form-group mx-sm-3 mb-2">
        <select class="form-control input-medium" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name}}</option>
            @endforeach
        </select>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
    </form>

@endsection()