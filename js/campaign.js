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
    $("#header").mouseover(function() {
	switchAnime("ap99");
    });
    $("#progress").mouseover(function() {
	switchAnime("ap99");
    });
    $("#donations").mouseover(function() {
	switchAnime("ap99");
    });


    // gifts
    $(".amounts_holder input").click(function(e){
        var src = $(this).parent("div").find(".alert")
        var tgt = $(".giftContainer")
        tgt.show().html(src.html())
    });

    // Activated the default donation radio button
    $('.donations input[checked=checked]').click();

    // auto select "other" radio button on text input focus
    $(".othersum input[type=text]").on("focus",function(){
        $("#sum1").attr("checked","checked")
    })



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

    // Default = show the demonstration
    switchAnime("ap99");

})

