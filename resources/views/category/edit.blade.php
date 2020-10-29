@extends('home')

@section('contenu')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Modifier Catégorie</h2>
            </div>

        </div>
    </div>



    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection