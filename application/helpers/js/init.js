


$(document).ready(function () {
    $('select').material_select();
    Materialize.updateTextFields();

    $("#icon_prefix").click(function() {
      $("#inicio_publicar").fadeIn("slow");
    });

    $("#publicar").click(function() {
      $("#inicio_publicar").hide("slow");
      $("#icon_prefix").blur();
      $("#album").addClass("green_black_text");
      $("#imagen").hide("slow");
    });
    $("#album").click(function(){
      if ($(this)[0].classList.value == "green_black_text") {
        $(this).removeClass("green_black_text");
        $("#imagen").fadeIn("slow");
      }
      else {
        $(this).addClass("green_black_text");
        $("#imagen").hide("slow");
      }

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });

});
