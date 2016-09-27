<?php

# 各ページ毎の振舞 基底クラス読み込み
require_once 'entryDivision/entryDivision.php';

# 設定ファイルの読み込み
require_once '../../fcnConfig.php';

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

# 管理機能ができるまで、、、
if ($clean['entryCategory'] !== "4"){

	# 応募者を DB に追加する
	$className = $clean['entryDivision'];
	try{

		# DB Connect
		$className->DbConnect($ConnectionString['dsn'],$ConnectionString['user'],$ConnectionString['pass']);

		# エントリー番号取得
		$className->SelectCount();

		# 入力データ Insert
		$className->InsertData($clean);


		# 管理者メールアドレス
		$SendMailCliant = new SendMailCliant();
		$admin = $SendMailCliant->GetMoldingMailAddr("FCN 採用担当",$MailSettings['admin']);
		#$admin = $SendMailCliant->GetMoldingMailAddr("FCN 採用担当","t-hirai@f-cn.jp");

		# 応募者メールアドレス
		$applicant = $SendMailCliant->GetMoldingMailAddr($clean['name'],$clean['mailAdress']);

		# 応募者へメール送信
		$SendMailCliant->ChangeState(new Applicant($clean['name']));
		$SendMailCliant->SendMail($clean['entryMessagge'],$applicant,$admin);

		# 管理者メール送信
		$SendMailCliant->ChangeState(new Admin($clean['link'] . $className->getEntryNo()));
		$SendMailCliant->SendMail($clean['entryMessagge'],$applicant,$admin);

		# thanks ページへ遷移
		header('Location: http://www.f-cn.jp/recruit/thanks.html');
		exit();

	} catch (Exception $error) {

		# Rollback
		if ($className !== ""){

			$className->DbRollback();
		}

		# システム担当者宛に DBエラー通知
		error_log($error, 1, $MailSettings['sys']);

		# サーバ日付取得
		$today = date(Ymd);

		# ログファイル名定義
		$logPath = dirname(__FILE__) . '/errorLog/' . $today . '.log';

		// ファイルの存在確認
		if( !file_exists($logPath) ){
			// ファイル作成
		 	touch( $logPath );
		}

		# Log ファイルに出力
		error_log($error, 3, $logPath);

		# エラー画面へ遷移
		header('Location: http://www.f-cn.jp/entry/error.html');
		exit();
	}

} else {

		# 管理者メールアドレス
		$SendMailCliant = new SendMailCliant();
		#$admin = $SendMailCliant->GetMoldingMailAddr("FCN 担当者","k-watanabe@f-cn.jp");
		$admin = $SendMailCliant->GetMoldingMailAddr("FCN お問い合わせ担当",$MailSettings['admin']);

		# 応募者メールアドレス
		$applicant = $SendMailCliant->GetMoldingMailAddr($clean['name'],$clean['mailAdress']);

		# 応募者へメール送信
		$SendMailCliant->ChangeState(new Applicant($clean['name']));
		$SendMailCliant->ContactSendMail($clean,$applicant,$admin);

		# 管理者メール送信
		$SendMailCliant->ChangeState(new Admin());
		$SendMailCliant->ContactSendMail($clean,$applicant,$admin);

		# thanks ページへ遷移
		header('Location: http://www.f-cn.jp/product/thanks.html');
		exit();

}
?>
 