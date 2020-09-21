// let $ = require('jquery');

$(document).ready(function() {
$.ajax(
  {
    'url': 'http://localhost/repo-php-ajax-dischi/db.php',
    'method': "GET",
    'success': function (database) {
      var source = $('#entry-template').html();
      var template = Handlebars.compile(source);
      for (var i = 0; i < database.length; i++) {
        var context= {
          "title" : database[i].title,
          "author" : database[i].author,
          "year" : database[i].year,
          "poster" : database[i].poster,
        };
        var html = template(context);
        $(".box").append(html);
      }
    },
    'error': function () {
      alert("errore");
    }
  }
);
})
