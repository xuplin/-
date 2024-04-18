




$(window).on('load', function(){

	var numNotVerified = parseInt($('#numNotVerified').text());
	var numVerified = parseInt($('#numVerified').text());


	var btnID , groupName;

	for(var i = 0 ; i < numNotVerified ; i++) {
		btnID = "#tableNotVerified tr td:eq(" + (6 + i*7) + ") a:eq(0)";
		groupName = "#tableNotVerified tr td:eq(" + (i*7) + ") div:eq(1)";

		$(btnID).on('click', createCallback_Accept(groupName));


		btnID = "#tableNotVerified tr td:eq(" + (6 + i*7) + ") a:eq(1)";
		$(btnID).on('click', createCallback_Delete(groupName));

	}



	for(var i = 0 ; i < numVerified ; i++) {
		
		btnID = "#tableVerified tr td:eq(" + (6 + i*7) + ") a:eq(0)";
		groupName = "#tableVerified tr td:eq(" + (i*7) + ") div:eq(1)";


		$(btnID).on('click', createCallback_Delete(groupName));

	}




});


function createCallback_Accept(groupName){
	// 尚未審核的確認報名按鈕
	return function(event){
		event.preventDefault();
		//alert("確認報名：" + $(groupName).text());

		$.post('libs/ajax_manage_user.php', { 'group_name' : $(groupName).text(), 'command' : 'verify' }, function(data){
			var recieve = $.parseJSON(data);

			if(recieve.status == "successful") {
				location.reload();
			}
			else if(recieve.status == "unsuccessful") {
				alert("寫入資料庫失敗：" . recieve.error);
			}


		});

	}
}


function createCallback_Delete(groupName){
	// 尚未審核的刪除按鈕
	return function(event){
		event.preventDefault();
		//alert("刪除：" + $(groupName).text());


		$.post('libs/ajax_manage_user.php', { 'group_name' : $(groupName).text(), 'command' : 'delete' }, function(data){
			var recieve = $.parseJSON(data);

			if(recieve.status == "successful") {
				location.reload();
			}
			else if(recieve.status == "unsuccessful") {
				alert("寫入資料庫失敗：" . recieve.error);
			}


		});
	}
}

