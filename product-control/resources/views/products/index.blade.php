@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Product Control Application</h2>

            </div>

        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        @foreach($products as $product )
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category}}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{route('products.show', $product->id)}}"> Show</a>
                    <a class="btn btn-primary" href="{{route('products.edit', $product->id )}}"> Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div align="center">
        <a class="btn btn-success" href="{{route('products.create')}}">Create New Product</a>
    </div>

@endsection
