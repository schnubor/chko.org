@extends('app')

@section('title') About chko.org @endsection
@section('description') CHKO.org is the personal online portfolio of Christian Korndoerfer who is a motion/visual designer& web developer from Berlin. Check out some of his selected works. @endsection
@section('og_image') http://chko.org/images/fb.png @endsection
@section('og_desc') CHKO.org is the personal online portfolio of Christian Korndoerfer who is a motion/visual designer& web developer from Berlin. Check out some of his selected works. @endsection
@section('og_url') {{ route('about') }} @endsection

@section('content')
    @include('partials.logo')
    <div class="container about">
        <div class="row">
            <div class="col-md-12">
                <h4>&#8594; About</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    Hi, I'm Christian and I'm working as a web developer and visual/product designer for <a href="http://styla.com" target="_blank" title="styla.com">styla.com</a> in Berlin. Before Styla I worked for the online music television service <a href="http://tape.tv" target="_blank" title="tape.tv">tape.tv</a></p> <p>I studied Information Technology at <a href="http://www.fh-zwickau.de" target="_blank" title="FH Zwickau">FH Zwickau</a>, Germany, graduated as a diploma engineer in 2009 and worked as a software developer/engineer afterwards. Besides motion design I was constantly looking into web related programming, UX and GUI design. I decided to move to Berlin in 2012 to dive deeper into this adventure.
                </p>
                <p>
                    At the same time I started an additional study in Leipzig, Germany, at the <a href="http://www.leipzigschoolofmedia.de" target="_blank" title="Leipzig School of Media">Leipzig School of Media</a> besides my job in order to improve my knowledge and get a bigger picture in general media, web technologies and economics as well as project management.
                </p>
                <p>
                    I'm eager for learning new things, figuring out how stuff works and solving problems. I enjoy working on challenging projects with others and value good thoughts and ideas. I'm also a strong supporter of the Open Source and Open Data movements.
                </p>
                <p>
                    Thanks for the visit! <br> Feel free to get in touch via <a href="mailto:info@chko.org" title="Email">Email</a>, <a href="http://www.twitter.com/schnubor" target="_blank" title="twitter">Twitter</a> or <a href="https://www.linkedin.com/pub/christian-kornd%C3%B6rfer/5b/204/880" target="_blank" title="linkedin">LinkedIn</a>.
                </p>
                <div class="row">
                    <div class="col-md-3">
                        <hr>
                        <p class="h3 links">Additional Links</p>
                        <ul>
                            <li><a href="https://vimeo.com/chko" target="_blank" title="Vimeo Profile">Vimeo</a></li>
                            <li><a href="https://www.youtube.com/channel/UCkkso77zR_w1Nli3lo4WKtA" target="_blank">Youtube</a></li>
                            <li><a href="https://github.com/schnubor" target="_blank" title="Github Profile">Github</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-offset-1">
                <img src="images/about.jpg" alt="Christian Korndörfer" class="full-width"><br><br>
                <address>
                    <strong>CHKO.org</strong><br>
                    Friedrich-Engels-Str. 3<br>
                    13156, Berlin<br>
                    <abbr title="Phone">P:</abbr> +49 160 / 96417889
                </address>
                <address>
                    <strong>Christian Korndörfer</strong><br>
                    <a href="mailto:info@chko.org">info@chko.org</a>
                </address>
                <a href="/files/CV.pdf" title="Download CV" class="btn btn-default">
                    Download CV
                </a><br><br>
                <a href="{{ route('imprint') }}">Imprint/legal</a>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
