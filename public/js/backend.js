
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

  $('#editLinkModal').on('show.bs.modal', function(event) {
    var _self, button, id;
    _self = $(this);
    button = $(event.relatedTarget);
    id = button.data('id');
    return $.getJSON('/api/link/' + id, function(data) {
      _self.find('.js-form').attr('action', '/link/' + data.id + '/edit');
      _self.find('.js-title').val(data.title);
      _self.find('.js-url').val(data.url);
      if (data.blank === 0) {
        console.log(data.blank);
        return _self.find('.js-blank').prop('checked', false);
      } else {
        return _self.find('.js-blank').prop('checked', true);
      }
    });
  });

}).call(this);

//# sourceMappingURL=backend.js.map