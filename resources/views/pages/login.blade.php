@extends('app')

@section('title')
Login
@endsection

@section('content')
    <div class="container">
        <div class="icon text-center">
            <div class="icon fa fa-unlock-alt" style="font-size: 72px; margin: 70px 0;"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                {{-- Flash message --}}
                @include('flash::message')
                {!! Form::open(['route' => 'login', 'method' => 'POST', 'style' => 'margin-bottom: 0;']) !!}
                    <div class="form-group">
                        {!! Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                    </div>
                    <div>
                        {!! Form::submit('Sign in', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row text-center">
            <small >
                <a href="{{ route('home') }}" style="color: #ddd;">Back to home page.</a>
            </small>
        </div>
    </div>
@endsection