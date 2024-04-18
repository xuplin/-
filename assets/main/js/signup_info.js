var ans_month;
var ans_day;

$(window).on('load', function(){
	
	// 將題目代(Q1, Q2......)號隱藏
	$('#question_num').css('display','none');


	// Query 答案
	$.post('libs/ajax_signup_info.php', { 'queryAnswer_QID' : $('#question_num').text() }, function(data) {
		var ans = $.parseJSON(data);

		ans_month = ans.month;
		ans_day = ans.day;
	});


});


$('#textareaInfo').on('scroll', function() {
	// 偵測報名須知滾輪滾到底部
	if($(this).scrollTop() + $(this).innerHeight() >= ($(this)[0].scrollHeight * 0.925)) {	// 因為某些瀏覽器的底部與別人不相同，所以減掉一小點高度
	//if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {

		// 如果題目還未載入完成 return
		if(ans_month == null && ans_day == null) {
			return;
		}

		// 啟用我明白了按鈕
		$('#understood').removeClass('disabled');
    }
});


$('#understood').click(function( event ) {
	// 按下我明白了按鈕

	event.preventDefault();	// 停止原按鈕的功能

	$('#info').fadeOut(400);	

	setTimeout(function(){
		// 顯示問題
		$('#question').fadeIn();

		
		$('#info').remove();
	},400);


});


$('#answer').submit(function(event) {
	// 按下確認答案按鈕
	
	// 答案錯誤
	if( !($('#answer-month').val() == ans_month && $('#answer-day').val() == ans_day) ) {

		event.preventDefault();	// 停止原按鈕的功能


		// 跳出你真的明白了嗎 modal 框
 		$("#dialog_attention").modal({
			 // 利用JSON傳參數
			 backdrop: 'static' ,	// 禁止滑鼠點擊外框關閉
			 keyboard : false		// 禁止ESC關閉
		 } );                
				

	}

});





