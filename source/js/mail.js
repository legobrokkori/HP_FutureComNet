window.onload = function() {

    /**
   * ���[���ɋL�ڂ�������i�[����ϐ�
   */
    var address, subject, body, hiddenData;
    var sendmail = document.getElementById('entryButton');
    var element;

    sendmail.onclick = function() {

        // ���[���ɋL�ڂ���������hidden�^�O����擾
        elements = document.getElementsByTagName('input')
        for(i=0;i<elements.length;i++){
			if(elements[i].type = "checkbox"){
				
			} else if(elements[i].type = "text"){
				
			} else if(elements[i].type = "radio"){
			
			} else if(elements[i].type = "radio")
        }
        
        hiddenData = document.getElementById('hidden_data').value;
        address = '~@co.jp';
        subject = '����';
        body = '�{��' + hiddenData;

        location.href = 'mailto:' + address + '?subject=' + subject + '&body=' + body;
    };

};