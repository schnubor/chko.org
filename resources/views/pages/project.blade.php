@extends('app')

@section('title')
    {{ $project->title }}
@endsection

@section('content')
    <div class="logo">
        <a href="/"><img class="full-width" src="/images/logo.png" alt="CHKO Logo"></a>
    </div>
    <div class="container project">
        <div class="row">
            <div class="col-md-12">
                <h4>&#8594; {{ $project->category->title }} &#8594; {{ $project->title }}</h4>
                <hr>
            </div>
        </div>
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
                                    <img class="full-width" src="{{ '/uploads/'.$image->filename }}" alt="{{ $image->project->title }}">
                                </div>
                            @else
                                <div class="item">
                                    <img class="full-width" src="{{ '/uploads/'.$image->filename }}" alt="{{ $image->project->title }}">
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
                <p>
                    {!! html_entity_decode($project->description) !!}
                </p>
            </div>
        </div>
        @if($project->links->count())
            <div class="row">
                <div class="col-md-3">
                <hr>
                <p class="h3 links">Related Links</p>
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
                </div>
            </div>
        @endif
    </div>

    @include('partials.footer')
@endsection