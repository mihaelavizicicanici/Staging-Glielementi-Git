/*$(document).ready(function() {
    $(".tabs-content a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});*/

$('a.link').click(function (e){
   e.preventDefault();
   var div_id = $('a.link').index($(this))
   $('.tab-content').hide().eq(div_id).show();
});