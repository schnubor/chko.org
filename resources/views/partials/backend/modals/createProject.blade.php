<div class="modal fade" id="createProjectModal" tabindex="-1" role="dialog" aria-labelledby="projectModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="projectModal">Create project</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'post.create.project', 'style' => 'margin-bottom: 0;', 'class' => 'js-form']) !!}
                <div class="form-group">
                    {!! Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('description', Input::old('description'), ['class' => 'form-control', 'placeholder' => 'Description', 'style' => 'resize: vertical;', 'rows' => '5']) !!}
                </div>
                <div class="form-group">
                    <select name="category_id" id="category_id" class="form-control">
                        <option disabled selected>Choose category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Project</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>