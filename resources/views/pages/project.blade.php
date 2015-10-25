@extends('app')

@section('title') {{ $project->title }} @endsection
@section('description') {{ str_limit($project->description, 150) }} @endsection
@section('og_image') 
    @if($project->images->count()) 
{{ 'http://chko.org/uploads/images/'.$project->images->first()->filename }}
    @else
{{ 'http://img.youtube.com/vi/'.$project->videos->first()->youtube_id.'/maxresdefault.jpg' }}
    @endif
@endsection
@section('og_desc') {{ str_limit($project->description, 150) }} @endsection
@section('og_url') {{ route('get.project', $project->id) }} @endsection

@section('content')
    <div class="logo">
        <a href="/"><img class="full-width" src="/images/logo.png" alt="CHKO Logo"></a>
    </div>
    <div class="container project">
        <div class="row">
            <div class="col-md-12">
                <h4>&#8594; <a href="/#{{ $project->category->title }}">{{ $project->category->title }}</a> &#8594; {{ $project->title }}</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @if($project->videos->count())
                            @foreach($project->videos as $key => $video)
                                @if($key == 0)
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                @else
                                    <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}"></li>
                                @endif
                            @endforeach
                        @endif
                        @if($project->images->count())
                            @foreach($project->images as $key => $image)
                                @if($project->videos->count())
                                    <li data-target="#carousel-example-generic" data-slide-to="{{ $project->videos->count() + $key }}"></li>
                                @else
                                    @if($key == 0)
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    @else
                                        <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}"></li>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @if($project->videos->count())
                            @foreach($project->videos as $key => $video)
                                @if($key == 0)
                                    <div class="item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="100%" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="100%" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if($project->images->count())
                            @foreach($project->images as $key => $image)
                                @if($project->videos->count())
                                    <div class="item">
                                        <img class="full-width" src="{{ '/uploads/images/'.$image->filename }}" alt="{{ $image->project->title }}">
                                    </div>
                                @else
                                    @if($key == 0)
                                        <div class="item active">
                                            <img class="full-width" src="{{ '/uploads/images/'.$image->filename }}" alt="{{ $image->project->title }}">
                                        </div>
                                    @else
                                        <div class="item">
                                            <img class="full-width" src="{{ '/uploads/images/'.$image->filename }}" alt="{{ $image->project->title }}">
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </div>

                    {{-- Controls --}}
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"></a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"></a>
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