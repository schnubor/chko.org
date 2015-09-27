<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Projects</strong>
            </div>
            @if($projects->count())
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td><a href="{{ route('get.project', $project->id) }}">{{ $project->title }}</a></td>
                                    <td><a class="be-description" href="{{ route('get.project', $project->id) }}">{{ $project->description }}</a></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#editProjectModal" data-id="{{ $project->id }}"><i class="fa fa-fw fa-pencil"></i></button>
                                        {!! Form::open(['route' => ['delete.project', $project->id], 'style' => 'margin-bottom: 0; display: inline-block;', 'onsubmit'=>'return confirm("Really want to delete '.$project->title.'? You will also delete all links and images in the project.");']) !!}
                                            <input name="_method" type="hidden" value="DELETE">
                                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip',  'data-placement' => 'bottom', 'title' => 'Delete']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="panel-body">
                    <p class="lead">No projects yet.</p>
                </div>
            @endif
            <div class="panel-footer">
                <button class="btn btn-primary" data-toggle="modal" data-target="#createProjectModal">New Project</button>
            </div>
        </div>
    </div>
</div>