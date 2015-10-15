<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Videos</strong>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        @if($projects->count())
                            @foreach($projects as $project)
                                @if($project->videos->count())
                                <div class="well">
                                    <legend>{{ $project->title }}</legend>
                                    <div class="row">
                                        @foreach($project->videos as $video)
                                            <div class="col-md-3">
                                                <div class="thumbnail">
                                                    <iframe width="100%" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allowfullscreen></iframe>
                                                    <div class="caption">
                                                    <small style="color: #ccc;"><a href="https://www.youtube.com/watch?v={{ $video->youtube_id }}" target="_blank">Watch on youtube</a></small><br>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            {!! Form::open(['route' => ['delete.video', $video->id], 'style' => 'margin-bottom: 0; display: inline-block;', 'onsubmit'=>'return confirm("Really want to delete that video?");', 'class' => 'pull-right']) !!}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip',  'data-placement' => 'bottom', 'title' => 'Delete']) !!}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @else
                                    <p class="lead">No videos uploaded yet.</p>
                                @endif
                            @endforeach
                        @else
                            <p class="lead">You need projects to add videos.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                {!! Form::open(['route' => 'post.create.video', 'style' => 'margin-bottom: 0;', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('youtube_id', Input::old('youtube_id'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Youtube ID']) !!}
                    </div>
                    <div class="form-group">
                        <select name="project_id" class="form-control">
                                <option selected disabled>Choose a project</option>
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($projects->count())
                        {!! Form::button('Add video', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                    @else
                        {!! Form::button('Add video', ['type' => 'submit', 'class' => 'btn btn-primary', 'disabled']) !!}
                    @endif
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>