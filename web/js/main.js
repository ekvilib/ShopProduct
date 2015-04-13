$(document).ready(function() {
    var $h = $('h1');

    runIt();

    stime();

    function runIt() {
        $h.animate({
            opacity:"0"
        }, 18001, function() {
            $h.removeAttr("style");
            runIt();
            //stime();
        });
    }

    function stime() {
        var dt = new Date();
        var times = dt.getHours() + ":" + dt.getMinutes() ;
        $('#time').html(times);


    }



});


function subcategory(categoryId)
{
    $('#subcategory-'+categoryId).show();
}