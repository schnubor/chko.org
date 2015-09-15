
/*
    Modals
 */

(function() {
  $('#editCategoryModal').on('show.bs.modal', function(event) {
    var _self, button, id;
    _self = $(this);
    button = $(event.relatedTarget);
    id = button.data('id');
    return $.getJSON('/category/' + id, function(data) {
      _self.find('.js-form').attr('action', '/category/' + data.id + '/edit');
      return _self.find('.js-title').val(data.title);
    });
  });

  $('#editProjectModal').on('show.bs.modal', function(event) {
    var _self, button, id;
    _self = $(this);
    button = $(event.relatedTarget);
    id = button.data('id');
    return $.getJSON('/api/project/' + id, function(data) {
      _self.find('.js-form').attr('action', '/project/' + data.id + '/edit');
      _self.find('.js-title').val(data.title);
      return _self.find('.js-description').val(data.description);
    });
  });

}).call(this);

//# sourceMappingURL=backend.js.map