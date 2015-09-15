<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Categories</strong>
            </div>
            <div class="panel-body">
                @if($categories->count())
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Projects</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->projects->count() }}</td>
                                            <td>
                                                <div class="pull-right">
                                                    <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#categoryModal" data-id="{{ $category->id }}"><i class="fa fa-edit"></i></button>
                                                    {!! Form::open(['route' => ['delete.category', $category->id], 'style' => 'margin-bottom: 0; display: inline-block;', 'onsubmit'=>'return confirm("Really want to delete '.$category->title.'? You will also delete all projects and images in the category.");']) !!}
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger', 'data-toggle' => 'tooltip',  'data-placement' => 'bottom', 'title' => 'Delete']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>                           
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="lead">No categories yet.</p>
                @endif
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['route' => 'post.create.category', 'style' => 'margin-bottom: 0;', 'class' => 'form-inline']) !!}
                            <div class="form-group">
                                {!! Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) !!}
                            </div>
                            {!! Form::button('Add category', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>