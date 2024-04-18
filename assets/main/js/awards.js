



var MaxYear;
var MinYear;



$(window).on('load', function(){
	
	$.post('libs/ajax_awards.php', { 'query' : 'year'} , function(data) {
		var value = $.parseJSON(data);

		MaxYear = value.Max;
		MinYear = value.Min;

		showTableImme(MaxYear);
		setButtons(MaxYear);
		
	});	
});

$(document).ready(function(){
    $('.enter').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});


// $("table tr").hover(
// 	function(){
//     	$(this).addClass("enter"); // 觸發 mouseenter 事件 新增 css 
// 	},
// 	function(){
//     	$(this).removeClass("enter"); // 觸發 mouseout 事件 移除 css 
// 	}
// );

$('.enter').on('.bd-example-modal-lg', function () {
	$('.bd-example-modal-lg').trigger('focus')
});

$('#btnPrev').on('click', function(event){	
	event.preventDefault();	// 停止原按鈕的功能


	var temp = $('#btnPrev').text();

	changeYear(temp.replace("年",""));

	scrollToTopAnimation();

});




$('#btnNext').on('click', function(event){	
	event.preventDefault();	// 停止原按鈕的功能

	var temp = $('#btnNext').text();

	changeYear(temp.replace("年",""));

	scrollToTopAnimation();

});




function changeYear(year) {
	$('#btnPrev').text((parseInt(year) + 1) + "年");
	$('#btnNext').text((parseInt(year) - 1) + "年");
	$('#awardTitle').text(year + "年");

	setButtons(parseInt(year));

	hideAllTables();

	showTable(year);
}



function setButtons(year) {

	$('#btnPrev').removeClass('disabled');
	$('#btnNext').removeClass('disabled');

	if(year >= MaxYear) {
		$('#btnPrev').addClass('disabled');
	}
	else if(year <= MinYear) {
		$('#btnNext').addClass('disabled');
	}
}

function showTable(year) {
	var ID = '#' + year;

	//$(ID).css('display','inline');

	setTimeout(function(){
		$(ID).fadeIn();
	}, 400);
		

	/*for(i = MinYear ; i <= MaxYear ; i++) {
		ID = '#' + i;

		$(ID).css('display','none');
	}*/
}

function hideAllTables() {

	for(i = MinYear ; i <= MaxYear ; i++) {
		var ID = '#' + i;

		//$(ID).css('display','none');

		$(ID).fadeOut(400);

	}

}

function showTableImme(year) {

	var ID = '#' + year;
	$(ID).fadeIn();
	

}


function scrollToTopAnimation() {

	var html = $('html');
	var body = $("body");
	var top = body.scrollTop() // Get position of the body

	if(top!=0)
	{
		body.animate({
			scrollTop:0
		}, 800);
		
	}
	else {
		html.animate({
			scrollTop:0
		}, 800);
	}

}