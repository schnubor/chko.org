@extends('app')

@section('title')
    Backend
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
            <h1>Backend</h1>
            <p class="lead">Welcome back {{ Auth::user()->username }}.</p>
            <a href="{{ route('logout') }}" class="btn btn-sm btn-default"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
            <a href="{{ route('home') }}" class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show site</a>
        </div>
    </div>
    <div class="container" style="padding-bottom:20px;">
        {{------------------ Admins ------------------}}
        @include('partials.backend.admins')

        {{------------------ Categories ------------------}}
        @include('partials.backend.categories')
        @include('partials.backend.modals.category')

        {{------------------ Projects ------------------}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Projects</strong>
                    </div>
                    <div class="panel-body">
                        @if($projects->count())
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->description }}</td>
                                            <td>
                                                <button class="btn btn-default btn-sm"><i class="fa fa-fw fa-pencil"></i> Edit</button>
                                                {!! Form::open(['route' => ['delete.project', $project->id], 'style' => 'margin-bottom: 0; display: inline-block;', 'onsubmit'=>'return confirm("Really want to delete '.$project->title.'? You will also delete all links and images in the project.");']) !!}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip',  'data-placement' => 'bottom', 'title' => 'Delete']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No projects yet.</p>
                            <a href="{{ route('get.create.project') }}" class="btn btn-primary">Create Project</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('partials.backend.modals.project')

        {{------------------ Images ------------------}}
        @include('partials.backend.images')

        {{------------------ Footer ------------------}}
        <footer class="row text-center">
            <small style="color: #CCC;">Made with <span style="color: #cd7777;">&hearts;</span> by Christian Korndörfer &middot; <a href="http://chko.org" target="_blank">chko.org</a> &middot; <a href="http://twitter.com/schnubor">@schnubor</a></small>
        </footer>
    </div>
@endsection