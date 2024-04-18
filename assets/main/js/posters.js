



var btnID;

for(var i = 1 ; i <= 8 ; i++) {

	btnID = "#btn_depart_group_" + i;

	$(btnID).on('click', createCallback_Click(i));

}



$(window).on('load', function(){
	
	$('#loading').fadeOut();


	$('#depart_group_1').fadeIn();	



});





function fadeOutAll() {

	$('.row.poster').fadeOut();

}



function createCallback_Click(i){
	
	return function(event){
		event.preventDefault();
		
		fadeOutAll();

		var id = '#depart_group_' + i;
		$(id).fadeIn();	

	}
}