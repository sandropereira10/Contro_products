@extends('products.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('products.index')}}">Turn Back</a>
            </div>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <form action="{{route('products.store')}}" method = "POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Name: </strong><br>
                {!! Form::text('name') !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Price: </strong><br>
                {!! Form::text('price') !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Category: </strong><br>
                {!! Form::text('category') !!}
            </div>
        </div>

        <div class="col xs-12 col-sm-12 col-md-12 text-center">
            {!! Form::submit('Save Product', ['class'=>'btn btn-primary'] ) !!}
            <button type="submit" class="btn btn-primary"> Submit </button>

        </div>
    </div>
</form>
@endsection