//handle ios single tap as single click
$("a.navi-bar").on('touchstart', function(event) {
  $(this).trigger('click');
});
