<div class="panel panel-default">
    <div class="panel-heading"><strong>Links</strong></div>
    <div class="panel-body">
        @if($links->count())
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Blank</th>
                        <th>Project</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($links as $link)
                        <tr>
                            <td>{{ str_limit($link->title, 15) }}</td>
                            <td>{{ str_limit($link->url, 15) }}</td>
                            <td>{{ $link->blank }}</td>
                            <td>{{ str_limit($link->project->title, 15) }}</td>
                            <td class="text-right">
                                <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#editLinkModal" data-id="{{ $link->id }}"><i class="fa fa-fw fa-pencil"></i></button>
                                {!! Form::open(['route' => ['delete.link', $link->id], 'style' => 'margin-bottom: 0; display: inline-block;', 'onsubmit'=>'return confirm("Really want to delete this link?");']) !!}
                                    <input name="_method" type="hidden" value="DELETE">
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip',  'data-placement' => 'bottom', 'title' => 'Delete']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="lead">No Links yet.</p>
        @endif
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'post.create.link', 'style' => 'margin-bottom: 0;', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('url', Input::old('url'), ['class' => 'form-control', 'placeholder' => 'URL', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group">
                        <select name="project_id" id="project_id" class="form-control">
                            <option selected>Choose a project</option>
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="blank">Open in new page</label>
                        {!! Form::checkbox('blank', Input::old('blank'), ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::button('Add Link', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>