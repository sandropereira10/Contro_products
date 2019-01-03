
<form action="{{route('products.store')}}" method = "POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Name: </strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Price: </strong>
                {!! Form::open(['action'=>'']) !!}
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Category: </strong>
                <input type="text" name="category" class="form-control" placeholder="Category">
            </div>
        </div>
        <div class="col xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> Submit </button>

        </div>
    </div>
</form>