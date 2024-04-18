$(window).on('load', function () {

	var numParticipateCompetition = parseInt($('#numParticipateCompetition').text());

	var btnID, groupName;

	for (var l = 1; l <= 3; l++) { // reviewer
		for (var i = 0; i < numParticipateCompetition; i++) {
			groupName = "#tableParticipateCompetition_" + l + " tr td:eq(" + (i * 8) + ") div:eq(1)";
			grade = "#tableParticipateCompetition_" + l + " tr td:eq(" + (4 + i * 8) + ") input:eq(0)";
			comment = "#tableParticipateCompetition_" + l + " tr td:eq(" + (5 + i * 8) + ") textarea:eq(0)";
			btnID_grade = "#tableParticipateCompetition_" + l + " tr td:eq(" + (6 + i * 8) + ") a:eq(0)";
			btnID_comment = "#tableParticipateCompetition_" + l + " tr td:eq(" + (6 + i * 8) + ") a:eq(1)";

			$(btnID_grade).on('click', createCallback_upload_grade(groupName, l, grade));
			$(btnID_comment).on('click', createCallback_upload_comment(groupName, l, comment));
		}
	}
});


function createCallback_upload_grade(groupName, whoviewer, grade) {
	return function (event) {
		event.preventDefault();

		if ($(grade).val() >= 101 || $(grade).val() <= -1) {
			alert("輸入分數範圍錯誤");
		} else if (isNaN($(grade).val()) == false && $(grade).val() != "") {
			$.post('libs/ajax_ReviewerGive.php', { 'groupname': $(groupName).text(), 'whoviewer': whoviewer, 'grade': $(grade).val() }, function (data) {
				var catch_info = $.parseJSON(data);
				if (catch_info == 1) {
					alert("評分完成， [" + $(groupName).text() + "] 目前分數: " + $(grade).val() + " 。");
				} else if (catch_info == 0) {
					alert("評分失敗，請再試一次。");
				}
			});
		} else {
			alert("請輸入分數");
		}
	}
}

function createCallback_upload_comment(groupName, whoviewer, comment) {
	return function (event) {
		event.preventDefault();
		
		if ($(comment).val() == "") {
			alert("請輸入評語");
		} else if ($(comment).val() != "") {
			$.post('libs/ajax_ReviewerGive.php', { 'groupname': $(groupName).text(), 'whoviewer': whoviewer, 'comment': $(comment).val() }, function (data) {
				var catch_info = $.parseJSON(data);
				if (catch_info == 1) {
					alert("評語完成， [" + $(groupName).text() + "] 目前評語: " + $(comment).val());
				} else if (catch_info == 0) {
					alert("評分失敗，請再試一次。");
				}
			});
		}
	}
}