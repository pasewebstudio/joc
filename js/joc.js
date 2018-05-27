//
var requrl = "";
$(document).ready(function() {

/*

    $('#clmodal').on('click', function() {
        console.log("1");
         $('#adesso').modal('hide');
         console.log("2");
    });

*/

    $(window).on('load',function(){
        $('#adesso').modal('show');
    });
    /*
    $.ajax({
        type : 'GET',
        url  : 'public/ajax/ajax_randomid.php',
        async: false,
        success : function(data) {
            var html ="";


            html = data;

            document.getElementById("back").innerHTML = html;



        }
    });
*/
     $.ajax({
        type : 'GET',
        url  : 'public/ajax/ajax_get_all.php',
        async: false,
        success : function(data) {
            var html ="";


            html = data;

            document.getElementById("back").innerHTML = html;



        }
    });

});

