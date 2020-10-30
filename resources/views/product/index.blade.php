@extends('home')
@section('contenu')

    <br>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
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




@endsection