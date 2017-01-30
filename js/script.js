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

// Changement des couleurs et de la police du site
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

// VERIFICATION SIMPLE DES DONNES UTILISATEURS AVANT ENVOIE VERS SERVEUR (psenser à fair ede l'ajax ! Ce serait mieux !);
$('#pseudo').change(function(){
  var pseudo = /^[^0-9][\w_-]{2,13}$/;
  if (pseudo.test(this.value)) {
    $('#pseudo').css('border-color', 'green');
  }else {
    $('#pseudo').css('border-color', 'red');
  }
});

$('#first_name').change(function(){
  var first_name = /^[a-zA-Z][a-zA-Zéèëê -]{2,13}$/;
  if (first_name.test(this.value)) {
    $('#first_name').css('border-color', 'green');
  }else {
    $('#first_name').css('border-color', 'red');
  }
});

$('#last_name').change(function(){
  var last_name = /^[a-zA-Z][a-zA-Z -]{2,13}$/;
  if (last_name.test(this.value)) {
    $('#last_name').css('border-color', 'green');
  }else {
    $('#last_name').css('border-color', 'red');
  }
});

$('#email').change(function(){
  var email = /^[\w\._-]{2,21}@[\w-]{2,21}\.[a-zA-Z]{2,6}$/;
  if (email.test(this.value)) {
    $('#email').css('border-color', 'green');
  }else {
    $('#email').css('border-color', 'red');
  }
});

$('#game').change(function(){
  var game = /^[a-zA-Z][a-zA-Z -]{2,20}$/;
  if (game.test(this.value)) {
    $('#game').css('border-color', 'green');
  }else {
    $('#game').css('border-color', 'red');
  }
});

$('#birthday_date').change(function(){
  var birthday_date = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
  if (birthday_date.test(this.value)) {
    $('#birthday_date').css('border-color', 'green');
  }else {
    $('#birthday_date').css('border-color', 'red');
  }
});

$('#message').change(function(){
  var message = /^[\w\n -]{6,999}$/;
  if (message.test(this.value)) {
    $('#message').css('border-color', 'green');
  }else {
    $('#message').css('border-color', 'red');
  }
});
