// JavaScript Document
/*
 *  import txtFile
 */
$(function() {
	$.ajax({
		url:'https://wx07.wadax.ne.jp/~f-cn-jp/entry/personalInformationProvision.txt',
		success: function(data){
			if (data.match(/\r/)) {  // 文中に「\r」があれば（サーバが Windows ならば）
				data = data.replace(/\r\n/g, "<br>");　// 「\r\n」を<br />に置換
        	}
        	else {
            	data = data.replace(/\n/g, "<br>");  　// 「\n」を<br />に置換
        	}
			$("#infoProvision").html(data);
		}
	});
});