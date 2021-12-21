$('#senha, #confirmar_senha').on('keyup', function () {
    if ($('#senha').val() == $('#confirmar_senha').val()) {
      $('#senha_aviso').addClass("d-none");
    } else 
      $('#senha_aviso').removeClass("d-none");
  });