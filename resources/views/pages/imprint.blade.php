@extends('app')

@section('title') Legal notice @endsection
@section('description') CHKO.org is the personal online portfolio of Christian Korndoerfer who is a motion/visual designer& web developer from Berlin. Check out some of his selected works. @endsection
@section('og_image') http://chko.org/images/fb.png @endsection
@section('og_desc') CHKO.org is the personal online portfolio of Christian Korndoerfer who is a motion/visual designer& web developer from Berlin. Check out some of his selected works. @endsection
@section('og_url') {{ route('imprint') }} @endsection

@section('content')
    <div class="logo">
        <a href="/"><img class="full-width" src="/images/logo.png" alt="CHKO Logo"></a>
    </div>
    <div class="container about">
        <div class="row">
            <div class="col-md-12">
                <h4>&#8594; Legal notice / Impressum</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"> 
                <h3>Verantwortlich für die Inhalte der Website</h3>
                
                <p><br>
                    Christian Korndörfer <br>
                    Friedrich-Engels-Str. 3 <br>
                    13156 Berlin <br><br>
                </p>

                <p>Alle Rechte sind dem Autoren (Christian Korndörfer) vorbehalten. Die Inhalte dieser Website sind urheberrechtlich geschützt. Der Autor ist für den Inhalt aller verlinkten Seiten, auf die diese Website direkt oder indirekt verweist, nicht verantwortlich. Der Autor übernimmt keine Garantie dafür, dass die auf dieser Website bereitgestellten Informationen stets aktuell, vollständig und richtig sind. Die Inhalte können jederzeit ohne Ankündigung geändert werden.</p>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection