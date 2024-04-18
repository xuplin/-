/*
	必須include JQuery.Form
	http://malsup.com/jquery/form
*/

var username = $('.user').text();
var d = new Date();
var year = d.getFullYear();

var hasAbstract, hasPoster, hasYoutube, hasOther;


var isIE;


$(window).on('load', function(){

	hasAbstract = false;
	hasPoster = false;
	hasYoutube = false;
	hasOther = false;
	

	// 判斷瀏覽器是否為IE
	if (navigator.appVersion.toUpperCase().indexOf("MSIE") != -1 ||
		navigator.appVersion.toUpperCase().indexOf("TRIDENT") != -1)		{

		// IE 隱藏iframe pdf 顯示下載海報
		isIE = true;
	}
	else {
		isIE = false;
	}


	
	showPDF("poster");



	$('#btn_upload_poster').on('click', function(event) {
		event.preventDefault();
		$(this).closest('#form_upload_poster').submit();
	});




	// 判斷元件是否存在(競賽組或一般組)
	if($("#abstract").length > 0) {
		loadAbstract(true);

	}
	else {
		hasAbstract = true;
	}

	if($("#link_video").length > 0) {

		// TODO:Get video id
		$.post('libs/ajax_upload_youtube.php', {'query_user' : username}, function(data) {
			var recieve = $.parseJSON(data);

			if(recieve.status == "successful") {
				hasYoutube = true;
				
				showPreviewVideo(recieve.url,false);
			}
			else if(recieve.status == "unsuccessful") {
				hasYoutube = false;

				showPreviewVideo("",false);
			}

		});

	}
	else {
		hasYoutube = true;
	}

	if($("#form_upload_other").length > 0) {
		showPDF("other");

		$('#btn_upload_other').on('click', function(event) {
			event.preventDefault();
			$(this).closest('#form_upload_other').submit();
		});
	}
	else {
		hasOther = true;
	}



	// 讓上一頁停止功能，並跳出檢查function : checkCompelete()
	if (typeof history.pushState === "function") {
        history.pushState("jibberish", null, null);
        window.onpopstate = function () {
            history.pushState('newjibberish', null, null);
            // Handle the back (or forward) buttons here
            // Will NOT handle refresh, use onbeforeunload for this.
			checkCompelete();
        };
    }
    else {
        var ignoreHashChange = true;
        window.onhashchange = function () {
            if (!ignoreHashChange) {
                ignoreHashChange = true;
                window.location.hash = Math.random();
                // Detect and redirect change here
                // Works in older FF and IE9
                // * it does mess with your hash symbol (anchor?) pound sign
                // delimiter on the end of the URL
            }
            else {
                ignoreHashChange = false;
            }
        };
    }


});



$('#backToHome').on('click',function(event){
	// 檢查是否完成上傳檔案
	if(!checkCompelete()) {
		event.preventDefault();
	}
});




// Youtube影片變更
$('#link_video').on('change',function(){
 
 	var url = $('#link_video').val();
	
	if (url != undefined || url != '') {
		var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
		var match = url.match(regExp);
		if (match && match[2].length == 11) {
			// Do anything for being valid
			// if need to change the url to embed url then use below line
			showPreviewVideo(match[2],true);
		}
		else {
			// Do anything for not being valid
			//$('#preview_video').attr('src', '');
			showPreviewVideo("",true);
		}
	}




});




// 上傳海報
$('#form_upload_poster').on('submit', function(event){
	event.preventDefault();

	if(!checkUpload('#upload_poster','#btn_upload_poster','#status_poster')) {
		return;
	}

	$(this).ajaxSubmit({
		url : 'libs/ajax_upload.php',
		success : function(data) {
			uploadDone(data, '#btn_upload_poster', '#status_poster');
		}
	});

});



// 上傳其他資料
$('#form_upload_other').on('submit', function(event){
	event.preventDefault();

	if(!checkUpload('#upload_other','#btn_upload_other','#status_other')) {
		return;
	}

	$(this).ajaxSubmit({
		url : 'libs/ajax_upload.php',
		success : function(data) {
			uploadDone(data, '#btn_upload_other', '#status_other');
		}
	});

});







$('#abstract').on('keyup keypress change',function(){
	$('#btn_abstract').removeClass('disabled');
});


// 儲存摘要
$('#btn_abstract').on('click', function(event){
	event.preventDefault();
	$('#btn_abstract').addClass('disabled');


	// POST
	$.post('libs/ajax_upload_abstract.php', { 'abstract' : $('#abstract').val(), 'user' : username }, function(data){
		var recieve = $.parseJSON(data);

		

		if(recieve.status == "successful") {
			loadAbstract();
		}
		else if(recieve.status == "unsuccessful") {
			alert("寫入資料庫失敗：" . recieve.error);
		}
	});

});



function uploadDone(data, btn, status) {
	var recieve = $.parseJSON(data);
			
	
	$(status).removeClass('icon fa-close');
	$(status).removeClass('icon fa-check');
			
	if(recieve.status == "successful") {
		// if success
		if(status == "#status_poster") {
			$(status).text(" 上傳成功，到成果展示頁面可以查看。");
		}
		else {
			$(status).text(" 上傳成功。");
		}
		$(status).css('color', '#637485');
		$(status).addClass('icon fa-check');
		

		btnUnload(btn, status);

		showPDF(status.replace("#status_",""));

	}
	else if(recieve.status == "unsuccessful") {
		// if not success
		$(status).text(" " + recieve.error);
		$(status).css('color', '#ff0000');
		$(status).addClass('icon fa-close');

		btnUnload(btn, status);
	}	

}


function checkUpload(upload,btn,status) {

	$(status).text("");
	$(status).css('color', '#637485');
	$(status).removeClass('icon fa-close');
	$(status).removeClass('icon fa-check');

	if($(upload).val() != "") {

		var re = /\.(pdf)$/i;

		if(re.test($(upload).val())) {

			// TODO:判斷檔案大小




			btnLoading(btn);
			
			return true;
		}
		else {
			// 非pdf格式
			$(status).text(" 請選擇.pdf檔案。");
			$(status).css('color', '#ff0000');
			$(status).addClass('icon fa-close');

			return false;
		}


	}
	else {
		// 尚未選擇檔案
		$(status).text(" 請選擇檔案。");
		$(status).css('color', '#ff0000');
		$(status).addClass('icon fa-close');

		return false;
	}
}





function btnLoading(btn) {

	$(btn).addClass('disabled');
	$(btn).text("上傳檔案中...");

}

function btnUnload(btn, status) {

	$(btn).removeClass('disabled');
	$(btn).text("上傳檔案");

}



function loadAbstract(onloadevent) {

	$.post('libs/ajax_upload_abstract.php', { 'query_user' : username} , function(data) {
		var recieve = $.parseJSON(data);

		if(recieve.status == "successful") {
			hasAbstract = true;
			$('#preview_abstract').css('display','inline');
			//$('#preview_abstract').css('color', '#637485');
			$('#preview_abstract').text(recieve.abstract);
			if(onloadevent) {
				$('#abstract').text(recieve.abstract);
			}
		}
		else if(recieve.status == "unsuccessful") {
			hasAbstract = false;
			$('#preview_abstract').css('display','none');
		}
		
	});	


}

function nl2br (str, is_xhtml) {   
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';    
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}

function showPreviewVideo(url, isToSave) {

	if(url != "") {
		
		var src = 'https://www.youtube.com/embed/' + url;
		$('#preview_video').attr('src', src);
		$('#preview_video').css('display', 'inline');	

		if(isToSave) {
			// Save to database
			$.post('libs/ajax_upload_youtube.php', { 'youtube' : url, 'user' : username }, function(data){
				var recieve = $.parseJSON(data);

				if(recieve.status == "successful") {
					hasYoutube = true;	
				}
				else if(recieve.status == "unsuccessful") {
					alert("寫入資料庫失敗：" . recieve.error);
				}
			});
		}
		else {
			$('#link_video').val(src);
		}
	}
	else {

		if(isToSave) {
			// Save to database
			$.post('libs/ajax_upload_youtube.php', { 'youtube' : null, 'user' : username }, function(data){
				var recieve = $.parseJSON(data);

				if(recieve.status == "successful") {
					hasYoutube = false;
				}
				else if(recieve.status == "unsuccessful") {
					alert("寫入資料庫失敗：" . recieve.error);
				}
			});
		}

		$('#preview_video').css('display', 'none');

	}


}

function showPDF(object_name) {


	var pathname = "upload/" + year + "/" + username + "/" + object_name + ".pdf";



	$.ajax({
		url: pathname,
		type:'HEAD',
		error: function()
		{
			// File not exists
			var preview_object = '#preview_' + object_name;

			if(isIE) {
				$(preview_object).css('display','none');
				$(preview_object + "_download").css('display','none');
			}
			else {
				$(preview_object).css('display','none');
				$(preview_object + "_download").css('display','none');
			}

			if(object_name == "poster") {
				hasPoster = false;
			}
			else if(object_name == "other") {
				hasOther = false;
			}
		},
		success: function()
		{
			// File exists
			var preview_object = '#preview_' + object_name;	

			if(isIE) {
				$(preview_object).css('display','none');
				$(preview_object + "_download").css('display','inline');
			}	
			else {
				$(preview_object + "_download").css('display','none');
				$(preview_object).css('display','inline');
				$(preview_object).attr('src',pathname);
			}	
			

			if(object_name == "poster") {
				hasPoster = true;
			}
			else if(object_name == "other") {
				hasOther = true;
			}
		}
	});

}



$('#video').on('submit',function(event){
	event.preventDefault();
});






function checkCompelete() {
	// 尚未有資料沒完成
	if((hasAbstract + hasPoster + hasYoutube + hasOther) < 4) {


		$('#lack').text("");

		if(!hasAbstract) {
			if($('#lack').text() == "") {
				$('#lack').text("尚缺：摘要");
			}
			else {
				$('#lack').text($('#lack').text() + "、摘要");
			}
		}

		if(!hasPoster) {
			if($('#lack').text() == "") {
				$('#lack').text("尚缺：海報");
			}
			else {
				$('#lack').text($('#lack').text() + "、海報");
			}
		}

		if(!hasYoutube) {
			if($('#lack').text() == "") {
				$('#lack').text("尚缺：影片");
			}
			else {
				$('#lack').text($('#lack').text() + "、影片");
			}
		}

		if(!hasOther) {
			if($('#lack').text() == "") {
				$('#lack').text("尚缺：其它審查資料");
			}
			else {
				$('#lack').text($('#lack').text() + "、其它審查資料");
			}
		}


		// 跳出 modal 框
 		$("#dialog_upload").modal();                


		 return false;
	}
	else {
		return true;
	}
}