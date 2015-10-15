<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Images</strong>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        @if($projects->count())
                            @foreach($projects as $project)
                                @if($project->images->count())
                                <div class="well">
                                    <legend>{{ $project->title }}</legend>
                                    <div class="row">
                                        @foreach($project->images as $image)
                                            <div class="col-md-3">
                                                <div class="thumbnail">
                                                    <img src="{{ '/uploads/images/'.$image->filename }}" alt="Image of {{ $image->project->title }}">
                                                    <div class="caption">
                                                        <small style="color: #ccc;">{{ $image->filename }}</small><br>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            {!! Form::open(['route' => ['delete.image', $image->id], 'style' => 'margin-bottom: 0; display: inline-block;', 'onsubmit'=>'return confirm("Really want to delete that image?");', 'class' => 'pull-right']) !!}
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
                                    <p class="lead">No images uploaded yet.</p>
                                @endif
                            @endforeach
                        @else
                            <p class="lead">You need projects to upload images.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                {!! Form::open(['route' => 'post.create.image', 'style' => 'margin-bottom: 0;', 'class' => 'form-inline', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::file('imageFile', ['class' => 'form-control', 'required' => 'required']) !!}
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
                        {!! Form::button('Upload image', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                    @else
                        {!! Form::button('Upload image', ['type' => 'submit', 'class' => 'btn btn-primary', 'disabled']) !!}
                    @endif
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>