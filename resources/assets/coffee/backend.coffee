###
    Modals
###

# Edit Category
$('#categoryModal').on 'show.bs.modal', (event) ->
    button = $(event.relatedTarget) # Button that triggered the modal
    id = button.data('id') # Extract info from data-* attributes
    $.getJSON '/category/'+id, (data) ->
        console.log data.title
        # fill in the form
        $('#categoryModal').find('.js-form').attr('action', '/category/'+data.id+'/edit')
        $('#categoryModal').find('.js-title').val(data.title)
        $('#categoryModal').find('.js-position').val(data.position)
        $('#categoryModal').find('.js-color').val(data.color)

# Edit Project
$('#editProjectModal').on 'show.bs.modal', (event) ->
    _self = $(this)
    button = $(event.relatedTarget) # Button that triggered the modal
    id = button.data('id') # Extract info from data-* attributes
    $.getJSON '/api/project/'+id, (data) ->
        console.log data
        # fill in the form
        _self.find('.js-form').attr('action', '/project/'+data.id+'/edit')
        _self.find('.js-title').val(data.title)
        _self.find('.js-description').val(data.description)
