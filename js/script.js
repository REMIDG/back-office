$('#cnxAdmin').on('shown.bs.modal', function () {
  $('#recipient-name').focus()
})


function koliko(elmt){
  var koliko = document.getElementsByClassName('koliko')
  for (var i = 0; i < koliko.length; i++) {
    koliko[i].style.display = "none";
  }

  if (document.getElementById(elmt).style.display != "none") {
    document.getElementById(elmt).style.display = "none";
  }else {
    document.getElementById(elmt).style.display = "block";
  }
}


$('.inputColor').eq(0).change(function(){
  $('nav, .onglet,th').css('background-color', $(this).val());
});

$('.inputColor').eq(1).change(function(){
  $('h1,h2,h3,h4,h5,h6,th,#li').css('color', $(this).val());
});

$('.inputColor').eq(2).change(function(){
  $('a,input').css('color', $(this).val());
});

$('.inputColor').eq(3).change(function(){
  $('.btn').css('background-color', $(this).val());
});

$('#police').change(function(){
  $('h1,h2,h3,h4,h5,h6,p,a,input,table,li').css('font-family', $(this).val());
});
