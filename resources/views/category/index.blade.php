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
            <th scope="col">Name</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach( $all as $cat)
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->name}}</td>
                <td>{{$cat->created_at}}</td>
                <td>{{$cat->updated_at}}</td>
                <td>
                    <form action="{{ route('category.destroy',$cat->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('category.edit',$cat->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

    {{$all->links('pagination::bootstrap-4')}}


@endsection