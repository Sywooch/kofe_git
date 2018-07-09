$(document).ready(function(){
    $("#img-question div").click(function() {
      $("#img-question div").removeClass("active");
      $(this).addClass("active");
      $('#one .button-next').removeAttr("disabled");
    });
    $("#three #answer-variants div").click(function() {
      $("#three #answer-variants div").removeClass("active");
      $(this).addClass("active");
      $('#three .button-next').removeAttr("disabled");
    });
    $("#four #answer-variants div").click(function() {
      $(this).toggleClass("active");
      $('#four .button-next').removeAttr("disabled");
    });
    $("#five #answer-variants div").click(function() {
      $("#five #answer-variants div").removeClass("active");
      $(this).addClass("active");
      $('#five .button-next').removeAttr("disabled");
    });
    $("#six #answer-variants div").click(function() {
      $("#six #answer-variants div").removeClass("active");
      $(this).addClass("active");
      $('#six .button-next').removeAttr("disabled");
    });
    $("#seven #answer-variants div").click(function() {
      $("#seven #answer-variants div").removeClass("active");
      $(this).addClass("active");
      $('#seven .button-next').removeAttr("disabled");
    });
    $("#seven .button-next, #seven #answer-variants div").click(function() {
      $(".title-popup").css('display','none');
    });
    $("#select-brend").change(function() {
        $('#two .button-next').removeAttr("disabled");
    });
    $(".open-b").click(function() {
        $("#popup").css('display','block');
    });
    $(".close").click(function() {
        $("#popup").css('display','none');
    });
});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}