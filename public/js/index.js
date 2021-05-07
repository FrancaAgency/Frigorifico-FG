$(document).ready(function() {
    $('.contenido-footer').hide();
  let valorIniciar = 0;
 console.log('valor inicial antes del click', valorIniciar);

  $('.pin').on('click',function () {
    valorIniciar ++;

    console.log('valor Inicial despues del click',valorIniciar);

    if(valorIniciar == 1);
    {
        $('.contenido-footer').show();
        $('.bi').removeClass('bi-chevron-compact-up').addClass('bi-chevron-compact-down').fadeIn();
    }

    if(valorIniciar == 2)
    {
        $('.contenido-footer').hide();
        $('.bi').addClass('bi-chevron-compact-up').removeClass('bi-chevron-compact-down');
        valorIniciar = 0;
    }
  })
  $('.bi-x').on('click',function () {
    $('.contenido-footer').hide();
    $('.bi').addClass('bi-chevron-compact-up').removeClass('bi-chevron-compact-down');
    valorIniciar = 0;
})
});