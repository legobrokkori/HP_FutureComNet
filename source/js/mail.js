window.onload = function() {

    /**
   * メールに記載する情報を格納する変数
   */
    var address, subject, body, hiddenData;
    var sendmail = document.getElementById('entryButton');
    var element;

    sendmail.onclick = function() {

        // メールに記載したい情報をhiddenタグから取得
        elements = document.getElementsByTagName('input')
        for(i=0;i<elements.length;i++){
			if(elements[i].type = "checkbox"){
				
			} else if(elements[i].type = "text"){
				
			} else if(elements[i].type = "radio"){
			
			} else if(elements[i].type = "radio")
        }
        
        hiddenData = document.getElementById('hidden_data').value;
        address = '~@co.jp';
        subject = '件名';
        body = '本文' + hiddenData;

        location.href = 'mailto:' + address + '?subject=' + subject + '&body=' + body;
    };

};