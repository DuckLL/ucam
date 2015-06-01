$(function(){
	var total = $('.carousel-inner div.item').size();
	var mwt = $("ol").index('.mwt-title-btn');
	append_li();
	
	var left = $('.container').width() - ($('.carousel-indicators li').width()*total*5);
	if(mwt ==0){
		$(".carousel-indicators").css('left',left);
	}
	function append_li()
	{
		var li = "";
		var get_ac = $( ".active" );
		var ac =  $( ".carousel-inner div" ).index( get_ac );
		
		
		for (var i=0; i <= total-1; i++){
			if(i == ac){
				if(mwt == 0){
					li += "<li data-target='#carousel-example-generic' data-slide-to='"+i+"' class='active'>"+$(".item img").eq(i).attr("alt")+"</li>";	
				}else{
					li += "<li data-target='#carousel-example-generic' data-slide-to='"+i+"' class='active'></li>";					
				}
			}else{
				if(mwt == 0){
					li += "<li data-target='#carousel-example-generic' data-slide-to='"+i+"' class=''>"+$(".item img").eq(i).attr("alt")+"</li>";
				}else{
					li += "<li data-target='#carousel-example-generic' data-slide-to='"+i+"' class=''></li>";
					
				}
			}
		}
		
		$(".carousel-indicators").append(li);
	}
});

$( window ).resize(function() {
	var total = $('.carousel-inner div.item').size();
	var left = $('.container').width() - ($('.carousel-indicators li').width()*total);
	if(mwt ==0){
		$(".carousel-indicators").css('left',left);
	}
});