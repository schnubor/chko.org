@extends('app')

{{-- Head --}}
@section('title') Christian Korndoerfer @endsection
@section('description') CHKO.org is the personal online portfolio of Christian Korndoerfer who is a motion/visual designer& web developer from Berlin. Check out some of his selected works. @endsection
@section('og_image') http://chko.org/images/fb_image.jpg @endsection
@section('og_desc') CHKO.org is the personal online portfolio of Christian Korndoerfer who is a motion/visual designer& web developer from Berlin. Check out some of his selected works. @endsection
@section('og_url') chko.org @endsection

{{-- Body --}}
@section('content')
    {{-- Header --}}
    <header>
        <div class="header-content text-center">
            <div class="container1280">
                <img src="/images/portrait.png" alt="Head of shoulders" class="portrait">
                <div class="text">
                    <h1>Christian Korndörfer</h1>
                    <h2 class="cd-headline letters type"><span>I'm a </span>
                        <span class="cd-words-wrapper waiting">
                            <b class="is-visible">web artisan.</b>
                            <b>motion designer.</b>
                            <b>burger lover.</b>
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
        <div class="container">
        @foreach($categories as $category)
            <section class="category" id="{{$category->title}}">
                <h4>{{ $category->title }}</h4>
                @if(!empty($category->projects()))
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
        </div>
    @endif

    {{-- Footer --}}
    @include('partials/footer')
@endsection
