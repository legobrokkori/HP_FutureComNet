<?php

interface State
{
	public function SendMail($entryMessagge,$mailAdress,$addrAdmin);
	public function ContactSendMail($entryMessagge,$mailAdress,$addrAdmin);
}

class Applicant implements State
{

	# Property
	private $name;

	# Constructor
	function __construct($name){
		$this->name = $name;
	}

	public function SendMail($entryMessagge,$applicant,$admin){

		# 応募者向けメールヘッダを作成
		$header  = "From: $admin\n";

		# 応募者向け件名を作成
		$subject = "採用エントリーのお礼";

		# 応募者向け本文を作成
		$body = $this->name ."様\n\n";
		$body.="お世話になっております。\n";
		$body.="FCN 採用担当でございます。\n\n";
		$body.="この度は弊社の" . $entryMessagge ."にエントリーいただき、\n";
		$body.="誠にありがとうございます。\n";
		$body.="改めて担当者より一週間以内にご連絡をさせていただきます。\n";
		$body.="──────────────────────\n";
		$body.="このメールに心当たりの無い場合は、お手数ですが\n";
		$body.="下記連絡先までお問い合わせください。\n\n\n";
		$body.="********************************************\n\n";
		$body.="フューチャーコムネット　代表　平井　択弥\n\n";
		$body.="〒123-0872　東京都足立区江北2-7-11\n";
		$body.="TEL：03-5856-8677　FAX：03-5856-8679\n";
		$body.="VoIP：050-3691-7489\n";
		$body.="E‐mail： t-hirai@f-cn.jp\n\n";
		$body.="********************************************";

		# メール送信
		mb_send_mail($applicant, $subject, $body, $header);
	}


	function ContactSendMail($input,$applicant,$admin){
		# 応募者向けメールヘッダを作成
		$header  = "From: $admin\n";

		# 応募者向け件名を作成
		$subject = "お問い合わせのお礼";

		# 応募者向け本文を作成
		$body = $this->name ."様\n\n";
		$body.="お世話になっております。\n";
		$body.="FCN お問い合わせ担当でございます。\n\n";
		$body.="この度は弊社の" . $input['products'] ."の件でお問い合わせいただき、\n";
		$body.="誠にありがとうございます。\n";
		$body.="改めて担当者より一週間以内にご連絡をさせていただきます。\n";
		$body.="──────────────────────\n";
		$body.="このメールに心当たりの無い場合は、お手数ですが\n";
		$body.="下記連絡先までお問い合わせください。\n\n\n";
		$body.="********************************************\n\n";
		$body.="フューチャーコムネット　代表　平井　択弥\n\n";
		$body.="〒123-0872　東京都足立区江北2-7-11\n";
		$body.="TEL：03-5856-8677　FAX：03-5856-8679\n";
		$body.="VoIP：050-3691-7489\n";
		$body.="E‐mail： t-hirai@f-cn.jp\n\n";
		$body.="********************************************";

		# メール送信
		mb_send_mail($applicant, $subject, $body, $header);
	}
}

class Admin implements State
{
	# Property
	private $link;

	# Constructor
	function __construct($link){
		$this->link = $link;
	}

	function SendMail($entryMessagge,$applicant,$admin){

		# 管理者向け件名作成
		$subjectAdmin = "採用エントリー通知";

		# 管理者向けメールヘッダを作成
		$headerAdmin  = "From: $applicant\n";

		# 管理者向け本文を作成
		$bodyAdmin = $entryMessagge ."にエントリーされました。\n";
		$bodyAdmin.="下記リンクから確認をお願いします。\n\n";
		$bodyAdmin.=$this->link;


		mb_send_mail($admin, $subjectAdmin, $bodyAdmin, $headerAdmin);

	}

	function ContactSendMail($input,$applicant,$admin){

		# 管理者向け件名作成
		$subjectAdmin = "問い合わせ通知";

		# 管理者向けメールヘッダを作成
		$headerAdmin  = "From: $applicant\n";

		# 管理者向け本文を作成
		$bodyAdmin = "";
		$bodyAdmin.= "購入予定商品に関するお問い合わせです。\n\n";
		$bodyAdmin.= "ご購入予定の商品  :" . $input['products'] . "\n";
		$bodyAdmin.= "氏名            :" . $input['name'] . "\n";
		$bodyAdmin.= "氏名（かな）     :" . $input['nameKana'] . "\n";
		$bodyAdmin.= "性別            :" . $input['sex'] . "\n";
		$bodyAdmin.= "生年月日         :" . $input['birthDate'] . "\n";
		$bodyAdmin.= "郵便番号         :" . $input['postCode1'] ." - " . $input['postCode2']  . "\n";
		$bodyAdmin.= "現住所           :" . $input['adressPrefectural'] . "\n";
		$bodyAdmin.= "                :" . $input['adressMunicipality'] . "\n";
		$bodyAdmin.= "                :" . $input['adressStreet'] . "\n";
		$bodyAdmin.= "電話番号         :" . $input['telNo'] . "\n";
		$bodyAdmin.= "メールアドレス    :" . $input['mailAdress'] . "\n";
		$bodyAdmin.= "クレジットカード  :" . $input['creditcard'] . "\n";
		$bodyAdmin.= "ご希望連絡日時    :" . "曜日：" . $input['contactweek'] ."  時間帯：". $input['contacthour'] . "\n\n";
		$bodyAdmin.= "上記内容でお問い合わせがあったため、ご対応願います。";


		mb_send_mail($admin, $subjectAdmin, $bodyAdmin, $headerAdmin);

	}
}

class SendMailCliant
{
	
	# Property
	private $state;

	public function getMoldingMailAddr($name,$addr){

		$signature = mb_encode_mimeheader($name);
		return "$signature<$addr>";
	}

	public function ChangeState(State $inputState) {

        $this->state = $inputState;
    }

    public function SendMail($entryMessagge,$mailAdress,$addrAdmin){

		$this->state->SendMail($entryMessagge,$mailAdress,$addrAdmin);
    }


    public function ContactSendMail($input,$mailAdress,$addrAdmin){

		$this->state->ContactSendMail($input,$mailAdress,$addrAdmin);
    }
}

?>