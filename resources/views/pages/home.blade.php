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

    <div class="container">
        {{-- Projects --}}
        @if(!empty($categories))
            @foreach($categories as $category)
                <section class="category" id="{{$category->title}}">
                    <h4>{{ $category->title }}</h4> 
                    @if(!empty($category->projects()))
                        <div class="row">
                            @foreach($category->projects as $project)
                                <div class="col-md-4">
                                    <div class="view">
                                        <img src="/uploads/{{ $project->images->first()->filename }}" />
                                        <div class="mask">
                                            <h2>{{ $project->title }}</h2>
                                            <a href="#" class="info">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </section>
            @endforeach
        @endif

        {{-- Footer --}}
        @include('partials/footer')
    </div>
@endsection
