var tombolMenu = document.getElementsByClassName('tombol-menu')[0];
var menu = document.getElementsByClassName('menu')[0];

tombolMenu.onclick = function() {
    menu.classList.toggle('active');
}

menu.onclick = function() {
    menu.classList.toggle('active');
}

$(document).ready(function() {
    $('button[name="submit"]').on('click', function() {
      var bookTitle = $('input[name="judulBuku"]').val();
      var country = $('input[name="negara"]').val();
  
      $.ajax({
        url: 'search.php',
        method: 'POST',
        data: { judulBuku: judulBuku, negara: negara },
        success: function(response) {
          $('#search-results').html(response);
        },
        error: function() {
          $('#search-results').html('Error occurred. Please try again.');
        }
      });
    });
  });
  