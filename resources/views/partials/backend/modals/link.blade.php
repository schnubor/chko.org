<div class="modal fade" id="editLinkModal" tabindex="-1" role="dialog" aria-labelledby="linkModal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="categoryModal">Edit link</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'edit.link', 'style' => 'margin-bottom: 0;', 'class' => 'js-form']) !!}
                <div class="form-group">
                    {!! Form::label('title') !!}
                    {!! Form::text('title', Input::old('title'), ['class' => 'form-control js-title', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('URL') !!}
                    {!! Form::text('url', Input::old('url'), ['class' => 'form-control js-url', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Open in new tab') !!}
                    {!! Form::checkbox('blank', Input::old('blank'), null, ['class' => 'js-blank']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>