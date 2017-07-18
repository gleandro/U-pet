


$(document).ready(function () {
  $(document).ready(function() {
    $('select').material_select();
  });
});

$("#icon_prefix").click(function() {
  $("#inicio_publicar").fadeIn("slow");
});
$("#publicacion").mouseleave(function() {
  $("#inicio_publicar").hide("slow");
  $("#icon_prefix").blur();
});
