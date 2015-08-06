@extends('app')

@section('title')
    Backend – New Project
@endsection

@section('content')
    <div class="jumbotron">
        <div class="container">
            {{-- Flash message --}}
            @include('flash::message')
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <h1>Backend &rarr; New Project</h1>
            <p class="lead">Create a new project</p>
            <a href="{{ route('backend') }}" class="btn btn-sm btn-default"><i class="fa fa-fw fa-sign-out"></i> Back to Overview</a>
        </div>
    </div>
    <div class="container" style="padding-bottom:20px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Title and description</strong>
            </div>
            <div class="panel-body">
                {{-- Create project form --}}
                {!! Form::open(['route' => 'post.create.project', 'style' => 'margin-bottom: 0;']) !!}
                    <div class="form-group">
                        {!! Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('description', Input::old('description'), ['class' => 'form-control', 'placeholder' => 'Description', 'style' => 'resize: vertical;', 'rows' => '5']) !!}
                    </div>
                    <div class="form-group">
                        <select name="position" id="projectPosition" class="form-control">
                            <option disabled selected>Choose category</option>
                            @foreach($categories as $category)
                                <select value="{{ $category->id }}">{{ $category->title }}</select>
                            @endforeach
                        </select>
                    </div>

            </div>
        </div>
        
        {{-- Project Images --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Images</strong>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>{{-- upload form --}}
                <div class="row">
                </div>
            </div>
        </div>

        {{-- Project Links --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Links</strong>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>{{-- upload form --}}
                <div class="row">
                </div>
            </div>
        </div>
        
        <div class="text-center">
            {!! Form::button('Create project', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg']) !!}
        </div>
        {!! Form::close() !!}

        {{------------------ Footer ------------------}}
        <footer class="row text-center" style="margin-top: 80px;">
            <small style="color: #CCC;">Made with <span style="color: #cd7777;">&hearts;</span> by Christian Korndörfer &middot; <a href="http://chko.org" target="_blank">chko.org</a> &middot; <a href="http://twitter.com/schnubor">@schnubor</a></small>
        </footer>
    </div>
@endsection