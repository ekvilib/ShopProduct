$(document).ready(function() {
    var $h = $('h1');

    runIt();



    function runIt() {
        $h.animate({
            opacity:"0"
        }, 1800, function() {
            $h.removeAttr("style");
            runIt();
        });
    }

    function stime() {
        var dt = new Date();
        var times = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        $('#time').html(times);

        stime();
    }

    stime();

});


function subcategory(categoryId)
{
    $('#subcategory-'+categoryId).show();
}