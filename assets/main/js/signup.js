var enableForm = false;



var verifyCallback = function(response) {
	// 如果 JavaScript 驗證成功
	if (response) {
		$.post('libs/captcha.php', { 'g-recaptcha-response': response }, function(data, status) {
			// 如果 PHP 驗證成功
			if (status == 'success') {
				enableForm = true;
				$('#btnSignUp').removeClass('disabled');
			}
			else {
				$('#errorMessage').text('驗證失敗，請稍後再試。');
			}
		});
	}
};

var expCallback = function() {
	enableForm = false;
	$('#btnSignUp').addClass('disabled');
	grecaptcha.reset();
};


$('input:text').on('change',function(event){
	if($('#leader-name').val() != "" && $('#leader-id').val() != "" && $('#leader-depart').val() != "" && $('#leader-email').val() != "" && $('#leader-phone').val() != "") {

		$('#memberOne').fadeIn();
	}

	if($('#memberOne-name').val() != "" && $('#memberOne-id').val() != "" && $('#memberOne-depart').val() != "" && $('#memberOne-email').val() != "" && $('#memberOne-phone').val() != "") {

		$('#memberTwo').fadeIn();
	}

	if($('#memberTwo-name').val() != "" && $('#memberTwo-id').val() != "" && $('#memberTwo-depart').val() != "" && $('#memberTwo-email').val() != "" && $('#memberTwo-phone').val() != "") {

		$('#memberThree').fadeIn();
	}

	if($('#memberThree-name').val() != "" && $('#memberThree-id').val() != "" && $('#memberThree-depart').val() != "" && $('#memberThree-email').val() != "" && $('#memberThree-phone').val() != "") {

		$('#memberFour').fadeIn();
	}

	if($('#memberFour-name').val() != "" && $('#memberFour-id').val() != "" && $('#memberFour-depart').val() != "" && $('#memberFour-email').val() != "" && $('#memberFour-phone').val() != "") {

		$('#memberFive').fadeIn();
	}
	
});

$('div.select-wrapper select').on('change', function(event){
	if($('#leader-name').val() != "" && $('#leader-id').val() != "" && $('#leader-depart').val() != "" && $('#leader-email').val() != "" && $('#leader-phone').val() != "") {

		$('#memberOne').fadeIn();
	}

	if($('#memberOne-name').val() != "" && $('#memberOne-id').val() != "" && $('#memberOne-depart').val() != "" && $('#memberOne-email').val() != "" && $('#memberOne-phone').val() != "") {

		$('#memberTwo').fadeIn();
	}

	if($('#memberTwo-name').val() != "" && $('#memberTwo-id').val() != "" && $('#memberTwo-depart').val() != "" && $('#memberTwo-email').val() != "" && $('#memberTwo-phone').val() != "") {

		$('#memberThree').fadeIn();
	}

	if($('#memberThree-name').val() != "" && $('#memberThree-id').val() != "" && $('#memberThree-depart').val() != "" && $('#memberThree-email').val() != "" && $('#memberThree-phone').val() != "") {

		$('#memberFour').fadeIn();
	}

	if($('#memberFour-name').val() != "" && $('#memberFour-id').val() != "" && $('#memberFour-depart').val() != "" && $('#memberFour-email').val() != "" && $('#memberFour-phone').val() != "") {

		$('#memberFive').fadeIn();
	}
});


$('#signUp').submit(function( event ) {
	// 判斷輸入值是否有誤
	if(!enableForm) {
		event.preventDefault();
		return;
	}

	if($('#group-name').val() == "") {

		$('#errorMessage').text('請輸入隊伍名稱！');

		event.preventDefault();

	}
	else if($('#group-name').val().length > 100) {

		$('#errorMessage').text('隊伍名稱不可超過100個字。');

		event.preventDefault();

	}
	else if(checkSpecialChar($('#group-name').val())) {

		$('#errorMessage').text('隊伍名稱不可以包含特殊字元。');

		event.preventDefault();

	}
	else if($('#password').val() == "") {

		$('#errorMessage').text('請輸入密碼。');

		event.preventDefault();

	}
	else if($('#password').val().length < 5) {

		$('#errorMessage').text('密碼至少要有5碼。');

		event.preventDefault();

	}
	else if($('#password').val() != $('#password-re').val()) {

		$('#errorMessage').text('密碼與確認密碼不符，請重新輸入確認密碼。');

		event.preventDefault();

	}
	else if($('#project').val() == "") {

		$('#errorMessage').text('請輸入專題名稱。');

		event.preventDefault();

	}
	else if($('#professor').val() == "") {

		$('#errorMessage').text('請輸入指導教授名字。');

		event.preventDefault();

	}
	else if($('#project-institute').val() == "") {

		$('#errorMessage').text('請選擇專題組別。');

		event.preventDefault();

	}
	else if($('#leader-name').val() == "") {

		$('#errorMessage').text('請輸入隊長名字。');

		event.preventDefault();

	}
	else if($('#leader-id').val() == "") {

		$('#errorMessage').text('請輸入隊長學號。');

		event.preventDefault();

	}
	else if($('#leader-depart').val() == "") {

		$('#errorMessage').text('請選擇隊長系所。');

		event.preventDefault();

	}
	else if($('#leader-email').val() == "") {

		$('#errorMessage').text('請輸入隊長e-mail。');

		event.preventDefault();

	}
	else if($('#leader-phone').val() == "") {

		$('#errorMessage').text('請輸入隊長聯絡電話。');

		event.preventDefault();

	}
	else if($('#leader-id').val().length > 9 || $('#memberOne-id').val().length > 9 || $('#memberTwo-id').val().length > 9) {

		$('#errorMessage').text('學號不可以超過9碼。');

		event.preventDefault();
	}
	else if($('#leader-phone').val().length > 10 || $('#memberOne-phone').val().length > 10 || $('#memberTwo-phone').val().length > 10) {

		$('#errorMessage').text('連絡電話不可超過10碼');

		event.preventDefault();
	}else if($('#memberOne-name').val() != "" || $('#memberOne-id').val() != "" || $('#memberOne-depart').val() != "" || $('#memberOne-email').val() != "" || $('#memberOne-phone').val() != "") {
		if($('#memberOne-name').val() == "") {

			$('#errorMessage').text('請輸入成員一名字。');

			event.preventDefault();
		}
		else if($('#memberOne-id').val() == "") {

			$('#errorMessage').text('請輸入成員一學號。');

			event.preventDefault();
		}
		else if($('#memberOne-depart').val() == "") {

			$('#errorMessage').text('請輸入成員一系所。');

			event.preventDefault();
		}
		else if($('#memberOne-email').val() == "") {

			$('#errorMessage').text('請輸入成員一e-mail。');

			event.preventDefault();
		}
		else if($('#memberOne-phone').val() == "") {

			$('#errorMessage').text('請輸入成員一聯絡電話。');

			event.preventDefault();
		}
	}else if($('#memberTwo-name').val() != "" || $('#memberTwo-id').val() != "" || $('#memberTwo-depart').val() != "" || $('#memberTwo-email').val() != "" || $('#memberTwo-phone').val() != "") {
		if($('#memberTwo-name').val() == "") {

			$('#errorMessage').text('請輸入成員二名字。');

			event.preventDefault();
		}
		else if($('#memberTwo-id').val() == "") {

			$('#errorMessage').text('請輸入成員二學號。');

			event.preventDefault();
		}
		else if($('#memberTwo-depart').val() == "") {

			$('#errorMessage').text('請輸入成員二系所。');

			event.preventDefault();
		}
		else if($('#memberTwo-email').val() == "") {

			$('#errorMessage').text('請輸入成員二e-mail。');

			event.preventDefault();
		}
		else if($('#memberTwo-phone').val() == "") {

			$('#errorMessage').text('請輸入成員二聯絡電話。');

			event.preventDefault();
		}
	}else if($('#memberThree-name').val() != "" || $('#memberThree-id').val() != "" || $('#memberThree-depart').val() != "" || $('#memberThree-email').val() != "" || $('#memberThree-phone').val() != "") {
		if($('#memberThree-name').val() == "") {

			$('#errorMessage').text('請輸入成員三名字。');

			event.preventDefault();
		}
		else if($('#memberThree-id').val() == "") {

			$('#errorMessage').text('請輸入成員三學號。');

			event.preventDefault();
		}
		else if($('#memberThree-depart').val() == "") {

			$('#errorMessage').text('請輸入成員三系所。');

			event.preventDefault();
		}
		else if($('#memberThree-email').val() == "") {

			$('#errorMessage').text('請輸入成員三e-mail。');

			event.preventDefault();
		}
		else if($('#memberThree-phone').val() == "") {

			$('#errorMessage').text('請輸入成員三聯絡電話。');

			event.preventDefault();
		}
	}else if($('#memberFour-name').val() != "" || $('#memberFour-id').val() != "" || $('#memberFour-depart').val() != "" || $('#memberFour-email').val() != "" || $('#memberFour-phone').val() != "") {
		if($('#memberFour-name').val() == "") {

			$('#errorMessage').text('請輸入成員四名字。');

			event.preventDefault();
		}
		else if($('#memberFour-id').val() == "") {

			$('#errorMessage').text('請輸入成員四學號。');

			event.preventDefault();
		}
		else if($('#memberFour-depart').val() == "") {

			$('#errorMessage').text('請輸入成員四系所。');

			event.preventDefault();
		}
		else if($('#memberFour-email').val() == "") {

			$('#errorMessage').text('請輸入成員四e-mail。');

			event.preventDefault();
		}
		else if($('#memberFour-phone').val() == "") {

			$('#errorMessage').text('請輸入成員四聯絡電話。');

			event.preventDefault();
		}
	}else if($('#memberFive-name').val() != "" || $('#memberFive-id').val() != "" || $('#memberFive-depart').val() != "" || $('#memberFive-email').val() != "" || $('#memberFive-phone').val() != "") {
		if($('#memberFive-name').val() == "") {

			$('#errorMessage').text('請輸入成員五名字。');

			event.preventDefault();
		}
		else if($('#memberFive-id').val() == "") {

			$('#errorMessage').text('請輸入成員五學號。');

			event.preventDefault();
		}
		else if($('#memberFive-depart').val() == "") {

			$('#errorMessage').text('請輸入成員五系所。');

			event.preventDefault();
		}
		else if($('#memberFive-email').val() == "") {

			$('#errorMessage').text('請輸入成員五e-mail。');

			event.preventDefault();
		}
		else if($('#memberFive-phone').val() == "") {

			$('#errorMessage').text('請輸入成員五聯絡電話。');

			event.preventDefault();
		}
	}
	
});



function checkSpecialChar(str) {

	var stralarm = new Array("<",">","|","'","/","\\",":","?","*","\""); 

	var toalarm = false;

	for (var i=0;i<stralarm.length;i++){ //依序載入使用者輸入的每個字元
		for (var j=0;j<str.length;j++)
		{
			ch = str.substr(j,1);
			if (ch == stralarm[i]) //如果包含禁止字元
			{
				toalarm = true; 
			}

			if(j == 0 && ch == ".") {
				toalarm = true; 
			}
		} 
	}



	return toalarm;

}