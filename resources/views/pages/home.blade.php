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
        <div class="logo">
            <img class="full-width" src="/images/logo.png" alt="Chko Logo">
        </div>
        <div class="header-content text-center">
            <div class="container1280">
                <img src="/images/portrait.png" alt="Head of shoulders" class="portrait">
                <div class="text">
                    <h1>Christian Korndörfer</h1>
                    <h2 class="cd-headline letters type"><span>Hi, I'm a </span>
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
            <p>stuff to look at</p>
            <span class="fa fa-chevron-down"></span>
        </div>
    </header>

        {{-- Projects --}}
        @if(!empty($categories))
            @foreach($categories as $category)
                <section class="category" id="{{$category->title}}">
                    <div class="container">
                    <h3>&#8594; {{ $category->title }}</h3> 
                        @if(!empty($category->projects()))
                            <div class="row">
                                @foreach($category->projects as $project)
                                    <div class="col-md-4">
                                        <div class="view">
                                            <img class="full-width" src="/uploads/{{ $project->images->first()->filename }}" />
                                            <a href="{{ route('get.project', $project->id) }}" class="mask">
                                                <h4>{{ $project->title }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
            @endforeach
        @endif

        {{-- Footer --}}
        @include('partials/footer')
    </div>
@endsection
