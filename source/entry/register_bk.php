<?php

# 各ページ毎の振舞 基底クラス読み込み
require_once 'entryDivision/entryDivision.php';

session_start();

# CSRF 対策
if (session_id() !== $_POST['token']){
	die('正規の画面からご利用ください。');
}

mb_language("Japanese");
mb_internal_encoding("UTF-8");

# POSTされたパラメータを受け取る
require_once 'InputCheck.php';
$InputCheck = new InputCheck($_SESSION);
$clean = $InputCheck->GetClean();

# メール送信準備
require_once 'mail/sendMail.php';

# 応募者を DB に追加する
$className = $clean['entryDivision'];
try{

	# DB Connect
	$className->DbConnect();

	# エントリー番号取得
	$className->SelectCount();

	# 入力データ Insert
	$className->InsertData($clean);

} catch (Exception $error) {

	$db->rollback();

	# システム管理者宛に DBエラー通知


	# エラー画面へ遷移
	header('Location: http://www.f-cn.jp/entry/error.html');
	exit();
}

# 管理者メールアドレス
$SendMailCliant = new SendMailCliant();
$admin = $SendMailCliant->GetMoldingMailAddr("FCN 採用担当","k-watanabe@f-cn.jp");

# 応募者メールアドレス
$applicant = $SendMailCliant->GetMoldingMailAddr($clean['name'],$clean['mailAdress']);

# 応募者へメール送信
$SendMailCliant->ChangeState(new Applicant($clean['name']));
$SendMailCliant->SendMail($clean['entryMessagge'],$applicant,$admin);

# 管理者メール送信
$SendMailCliant->ChangeState(new Admin());
$SendMailCliant->SendMail($clean['entryMessagge'],$applicant,$admin);

# thanks ページへ遷移
header('Location: http://www.f-cn.jp/recruit/thanks.html');
exit();

?>
 