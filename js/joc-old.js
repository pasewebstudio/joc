//
var requrl = "";
$(document).ready(function() {

    $.ajax({
        type : 'GET',
        url  : 'public/ajax/ajax_get_quote.php',
        async: false,
        success : function(data) {
             var html ="";
console.log(data);

            html = data;

            document.getElementById("quote").innerHTML = html;



        }
    });
    $.ajax({
        type : 'GET',
        url  : 'public/ajax/ajax_get_back.php',
        async: false,
        success : function(data) {
            var html ="";


            html = data;

            document.getElementById("back").innerHTML = html;



        }
    });

});

