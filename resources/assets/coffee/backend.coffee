###
    Modals
###

# Edit Category
$('#editCategoryModal').on 'show.bs.modal', (event) ->
    _self = $(this)
    button = $(event.relatedTarget) # Button that triggered the modal
    id = button.data('id') # Extract info from data-* attributes
    $.getJSON '/category/'+id, (data) ->
        # console.log data.title
        # fill in the form
        _self.find('.js-form').attr('action', '/category/'+data.id+'/edit')
        _self.find('.js-title').val(data.title)

# Edit Project
$('#editProjectModal').on 'show.bs.modal', (event) ->
    _self = $(this)
    button = $(event.relatedTarget) # Button that triggered the modal
    id = button.data('id') # Extract info from data-* attributes
    $.getJSON '/api/project/'+id, (data) ->
        # console.log data
        # fill in the form
        _self.find('.js-form').attr('action', '/project/'+data.id+'/edit')
        _self.find('.js-title').val(data.title)
        _self.find('.js-description').val(data.description)

# Edit Category
$('#editLinkModal').on 'show.bs.modal', (event) ->
    _self = $(this)
    button = $(event.relatedTarget) # Button that triggered the modal
    id = button.data('id') # Extract info from data-* attributes
    $.getJSON '/api/link/'+id, (data) ->
        # fill in the form
        _self.find('.js-form').attr('action', '/link/'+data.id+'/edit')
        _self.find('.js-title').val(data.title)
        _self.find('.js-url').val(data.url)
        if data.blank is 0
            console.log data.blank
            _self.find('.js-blank').prop('checked', false)
        else
            _self.find('.js-blank').prop('checked', true)
