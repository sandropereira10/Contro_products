@extends('products.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('products.index')}}">Turn Back</a>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="aler alert-danger">
            <strong>Whoops!</strong> There were some problems. <br><br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('products.update', ['id' =>$product->id])}}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Name </strong><br>
                    {!! Form::text('name', $product->name, ['placeholder'=>'name'], ['class'=>"form-control"]) !!}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Price </strong><br>
                    {!! Form::text('price', $product->price, ['placeholder' =>'price'], ['class'=>'form-control']) !!}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Category </strong><br>
                    {!! Form::text('category', $product->category, ['placeholder'=>'category'], ['class'=>'form-control'], ['required']) !!}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-sm-12 text-center">
                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </form>
@endsection


