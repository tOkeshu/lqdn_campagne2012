function showMore(more_div) {
   more_div.animate();
}

    var anime_timer = 0;
    var auto_anime = 0;

    // switches text and figure
    function switchAnime( id ){
	$(".animed").hide();
	$("#d"+id).show();
	$(".anime_point").removeClass("active");
	$("#"+id).addClass("active");
    }
    manualAnime=function(){
	idname=$(this).attr("id");
        switchAnime( idname );
    }

$(document).ready(function() {

    // mouseOver
    $("a.anime_point").mouseover(manualAnime);
    $("a.anime_point").click(manualAnime);

    // Automatic switchanime :
    autoAnime();

    // gifts
    $(".amounts_holder input").click(function(e){
        var src = $(this).parent("div").find(".alert")
        var tgt = $(".giftContainer")
        tgt.show().html(src.html())
    });
    // Sets the progress bar
    $( "#progress_bar" ).progressbar({
        value: 37
    });

    // Activated the default donation radio button
    $('.donations input[checked=checked]').click();

    // nocado = swap the other fields...
    if ($("#nocado")) {
	$("#nocado").click(function() {
	    if ($(this).attr("checked")) {
		$("#needcado").hide();
	    } else {
		$("#needcado").show();
	    }
	});
    }

})

