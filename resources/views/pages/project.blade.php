@extends('app')

@section('title')
    {{ $project->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($project->images as $key => $image)
                            @if($key == 0)
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            @else
                                <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}"></li>
                            @endif
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($project->images as $key => $image)
                            @if($key == 0)
                                <div class="item active">
                                    <img class="" src="{{ '/uploads/'.$image->filename }}" alt="{{ $image->project->title }}">
                                </div>
                            @else
                                <div class="item">
                                    <img class="" src="{{ '/uploads/'.$image->filename }}" alt="{{ $image->project->title }}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $project->title }}</h1>
                <p class="lead">
                    {!! html_entity_decode($project->description) !!}
                </p>
                @if($project->links->count())
                    <ul>
                        @foreach($project->links as $link)
                            <li>
                                <a href="{{ $link->url }}" title="{{ $link->title }}" 
                                @if($link->blank)
                                    target="_blank"
                                @endif>{{ $link->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                
            </div>
        </div>
    </div>
@endsection