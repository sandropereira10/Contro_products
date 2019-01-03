@extends('users.layout')
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
            <th>Age</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user )
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->email}}</td>
                <td>

                </td>
            </tr>
        @endforeach
    </table>


@endsection
