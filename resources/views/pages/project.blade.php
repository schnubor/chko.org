@extends('app')

@section('title')
    {{ $project->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- Images --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $project->title }}</h1>
                <p class="lead">
                    {{ $project->description }}
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