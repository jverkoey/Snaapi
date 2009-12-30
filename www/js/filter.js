
$(function() {
  var last_filter = null;

  $('#filter').keyup(function(event) {
    var filter = $.trim($(this).val().toLowerCase());

    var filtered = {};

    if (filter.length > 0) {
      if (last_filter != filter) {
        $('.block').each(function() {
          var blockId = $(this).attr('id');
          var details = $(this).children('.details');
          if (details.children('.title').html().toLowerCase().indexOf(filter) >= 0) {
            filtered[blockId] = true;
          }
        });

        $('.block').hide()
        var nVisibleBlocks = 0;
        for (var key in filtered) {
          nVisibleBlocks++;
          $('#'+key).show();
        }
        last_filter = filter;

        if (0 == nVisibleBlocks) {
          $('#noresults').show();
          $('#filtered').hide();
        } else {
          $('#noresults').hide();
          $('#filtered').show();
        }
      }
    } else {
      last_filter = null;
      // No filter, then show everything.
      $('.block').show();
      $('#noresults').hide();
      $('#filtered').hide();
    }

    // Return was released.
    if (event.keyCode == 13) {
      // Get the first block and go to it.
      var link = $('.block:visible:first').parent();
      if (link.attr('href')) {
        window.location = link.attr('href');
      }
    }
  });

  $('#noresults').click(function() {
    $('#filter').val('').keyup();
  });

  $('#filtered').click(function() {
    $('#filter').val('').keyup();
  });

  $('#filter').keyup();
});