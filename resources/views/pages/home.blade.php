@extends('app')

@section('title')
    Christian Korndoerfer
@endsection

@section('content')

    {{-- Navigation --}}
    @include('partials.navigation')
    @include('partials.mobile-navigation')

    {{-- Header --}}
    <header>
        <div class="header-content text-center">
            <div class="container1280">
                <img src="/images/portrait.png" alt="Head of shoulders" class="portrait">
                <div class="text">
                    <h1>Christian Korndörfer</h1>
                    <h2 class="cd-headline letters type"><span>I'm a </span>
                        <span class="cd-words-wrapper waiting">
                            <b class="is-visible">pizza</b>
                            <b>sushi</b>
                            <b>steak</b>
                        </span>
                    </h2>
                    <div class="buttons">
                        <a href="#" class="btn btn-default" title="About me">About me</a>
                        <a href="#" class="btn btn-default" title="Download CV">Download CV</a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="arrow js-arrow">
            <span class="fa fa-chevron-down"></span>
        </div>
    </header>

    {{-- Projects --}}
    @if(!empty($categories))
        @foreach($categories as $category)
            @if(!empty($category->projects->first()->bgcolor))
                <section class="category" id="{{$category->title}}" style="color: {{ $category->color }}; background-color: {{ $category->projects->first()->bgcolor }};">
            @else
                <section class="category" id="{{$category->title}}" style="color: {{ $category->color }}; background-color: white;">
            @endif
                <h2>{{ $category->title }}</h2>
                @if(!empty($category->projects))
                    @foreach($category->projects as $project)
                        <section class="project" style="background-color: {{ $project->bgcolor }}; color: {{ $project->color }};">
                            <div class="container1280">
                                <h3>{{ $project->title }}</h3>
                                <h4>{{ $project->description }}</h4>
                                @foreach($project->images as $image)
                                    <img src="/uploads/{{ $image->filename }}" alt="{{ $image->project->title }}" class="project-image">
                                @endforeach
                            </div>
                        </section>
                    @endforeach
                @endif
            </section>
        @endforeach
    @endif

    {{-- Footer --}}
    <footer></footer>
@endsection
