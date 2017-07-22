//handle ios single tap as single click
$("a.navi-bar").on('touchstart', function(event) {
  $(this).trigger('click');
});

$( document ).ready(function() { //handle newsletter popup
    setTimeout(function () {
      $("#popupcontainer").fadeIn()
    }, 5000);

    $("#popupClose").on('click', function (evt) {
      $("#popupcontainer").fadeOut();
    })
});
