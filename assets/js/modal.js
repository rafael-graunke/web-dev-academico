$(function () {
    $('a.remove-item').click(function () {
      var url = this.href;
      $('#exampleModal .btn-ok').click(function () {
        if (document.getElementById("confirm-text").value == "DELETE") {
          window.location.href = url;
        }        
      });
    });
  });