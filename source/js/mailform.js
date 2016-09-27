// JavaScript Document

jQuery(document).ready(function(){
	// 当function 呼び出し元のパスから
	// 採用区分を判定する
	var entryCategory;
		
	if (location.pathname.match(/(.*newgraduate)/)){
		entryCategory = "1";
		
	} else if (location.pathname.match(/(.*newgraduate)/)){
		entryCategory = "2";
			
	} else if (location.pathname.match(/(.*part)/)){
		entryCategory = "3";
			
	}

	$('#entryCategory').val(entryCategory);

	jQuery("#entry").validationEngine();
});

	
/*
 *  inputCheck
 */
//$(function(){
//	
//	var chkTargetType = "";
//	var chkboxEle = "";
//	var targetName = "";
//
//	var chkTargetEle = document.forms["entryForm"].getElementsByTagName("input");
//	
//	for(i=0;i<chkTargetEle.length;i++){
//		chkTargetType = chkTargetEle[i].type;
//		
//		if(chkTargetType === "checkbox"){
//			
//			var v = chkTargetEle[i].name
//			// チェックを付けた数を取得する
//			if($("input[group=v]:checked").length > 0){
//				alert("OK!!");
//			} else {
//				alert("どれか最低1つチェックを付けてください。");
//			}
//			
//			
//		} else if((chkTargetType === "textbox") || (chkTargetType === "textarea")){
//		}
//	}
//});

/*
 *  setAge
 */

(function($){
	$.fn.SetAge = function(){
		this.each(function(){
			$(this).blur(function(){
			
				// 1桁の数字を0埋めで2桁にする
				var toDoubleDigits = function(num) {
					num += "";
						if (num.length === 1) {
							num = "0" + num;
						}
					return num;
				};
				
				//現在時刻を取得（yyyymmdd）
				var date = new Date();
				var y = date.getFullYear();
				var m = toDoubleDigits(date.getMonth() + 1);
				var d = toDoubleDigits(date.getDate());
				var ymd = y + m + d;
				var nowMMDD = m + d;
				
				//入力された日付を取得
				var birthDay = $(this).val();
				var birthYear = birthDay.substr(0,4);
				var birthMMDD = birthDay.substr(4,4);
				var age
				
				if(birthDay.length === 8){
					if(nowMMDD < birthMMDD){
						age = (parseInt(y) - parseInt(birthYear) - 1);
					} else {
						age = parseInt(y) - parseInt(birthYear);
					}
				} else {
					age = "";
				}
				$('[name=age]').val(age);
			});
		});
	};
	$(function(){
		$('[name=birthDate]').SetAge();
	});
}(jQuery));


/*
 *  ajaxPost
 */

(function($){

//	$('#entry').submit(function(){
		
		

		//選択されたチェックボックスの値を配列で取得
	//	var checks=[];
	//	$("[name='occupation[]']:checked").each(function(){
	//		checks.push(this.value);
	//	});
		
		
	//	var contents = {
	//		entrycategory : entrycategory,
	//		occupation : checks,
	//		name : $('#name').val(),
	//		nameKana : $('#nameKana').val(),
	//		sex : $("input:radio[name='sex']:checked").val(),
	//		birthDate : $('#birthDate').val(),
	//		age : $('#age').val(),
	//		telNo : $('#telNo').val(),
	//		postCode1 : $('#postCode1').val(),
	//		postCode2 : $('#postCode2').val(),
	//		adressPrefectural : $("#adressPrefectural").val(),
	//		adressMunicipality : $('#adressMunicipality').val(),
	//		adressStreet : $('#adressStreet').val(),
	//		mailAdress : $('#mailAdress').val(),};
		
		
		// AjaxでPHPを呼び出す
	//	 $.ajax({
	//		type: "POST",
	//		cache:false,
	//		url: "../../mailform/send.php",
	//		data: contents,
//			dataType: "json",
	//		success: function(data){
	//			alert(data);
	//		},
	//		error: function(XMLHttpRequest, textStatus, errorThrown) {
	//			alert("Error：" + errorThrown.message);
	//			alert("textStatus：" + textStatus);
	//			alert("XMLHttpRequest：" + XMLHttpRequest.status);
	//		}
	//	});
//	});
}(jQuery));

/*
var conservationKey = "[resume]";
var mustId = "(必須)";
var construct = new Array("－","～");
function sendEntryForm(obj){
	var caution = "";
	var errorflag = 0;
	var must = mustId;
	var error_element_number = new Array();
	var email_address = "";
	var checkflag = new Object();

	
	if(errorflag == 0){
		if(confirm("送信してもよろしいですか？")){
			for(i=0;i<obj.length ;i++){
				obj.elements[i].name = obj.elements[i].name.replace(must,"");
				if(obj.elements[i].type == "submit"){
					obj.elements[i].disabled = true;
				}
			}
			return true;
		}
		else{
			return false;
		}
	}
	else{
		caution = "TYPE "+errorflag+" ERROR\n"+caution;
		alert(caution);
		obj.elements[error_element_number[0]].focus();
		return false;
	}
}*/