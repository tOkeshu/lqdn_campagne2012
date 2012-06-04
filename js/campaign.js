function showMore(more_div) {
   more_div.animate();
}

    var anime_timer = 0;
    var auto_anime = 1;

    // switches text and figure
    function switchAnime( id ){
	$(".animed").hide();
	$("#d"+id).show(300);
	$(".anime_point").removeClass("active");
	$("#"+id).addClass("active");
    }
    function autoAnime() {
	switchAnime("ap"+auto_anime);
	auto_anime++;
	if (auto_anime>8) auto_anime=1;
	anime_timer=setTimeout("autoAnime()",7000);
    }

$(document).ready(function() {

    // mouseOver
    $("a.anime_point").mouseover(function(){
	idname=$(this).attr("id");
	// We stop the automatic animation for 15 seconds, and it will start from the rollovered one:
	if (anime_timer) { 
	    clearTimeout(anime_timer); 
	    auto_anime=parseInt(idname.substring(2,3)); 
	    anime_timer=setTimeout("autoAnime()",30000); 
	}
        switchAnime( idname );
    });

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
})

