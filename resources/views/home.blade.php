@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                        <div class="dropdown col-lg-2">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="Categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </button>
                            <div class="dropdown-menu" aria-labelledby="Categories">
                                <a class="dropdown-item" href="{{route('category.create')}}">Ajouter</a>
                                <a class="dropdown-item"  href="{{route('category.index')}}" >Lister</a>
                                <a class="dropdown-item" href="#">Rechercher</a>
                            </div>
                        </div>

                            <div class="dropdown col-lg-10">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="products" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Produits
                                </button>
                                <div class="dropdown-menu" aria-labelledby="products">
                                    <a class="dropdown-item" href="{{route('product.create')}}">Ajouter</a>
                                    <a class="dropdown-item"  href="{{route('product.index')}}" >Lister</a>
                                    <a class="dropdown-item" href="#">Rechercher</a>
                                </div>
                            </div>
                        </div>

                        @yield('contenu')
<br>
                            <h1 class="text-center">Vos produits</h1><br>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name Product</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Updated_at</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach( $all as $prod)
                                    <tr>
                                        <th scope="row">{{$prod->id}}</th>
                                        <td>{{$prod->name}}</td>
                                        <td>{{$prod->created_at}}</td>
                                        <td>{{$prod->updated_at}}</td>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection