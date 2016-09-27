<?php

# 各ページ毎の振舞 基底クラス読み込み
require_once 'entryDivision/entryDivision.php';

session_start();
mb_language("Japanese");
mb_internal_encoding("UTF-8");

# POSTされたパラメータを受け取る
require_once 'InputCheck.php';
$InputCheck = new InputCheck($_SESSION);
$clean = $InputCheck->GetClean();

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>確認画面</title>
		<link rel="stylesheet" href="../css/contents.css">
		<!--[if IE]>
		<script src="../js/main.js/html5shiv.js"></script> 
		<![endif]--> 
		<script src="../js/respond.js"></script>
	</head>
	<body>
		<div id="logoArea">
			<img src="../image/TitleLogoWeb.png" id="logoFcnImg" alt="Logo">
		</div>
		<div class="confirmArea">
			<h1 class="enrtyHeader">確認画面</h1>
			<p>以下の内容で間違いがなければ、「送信」ボタンを押してください。</p>
			<form action="register.php" method="post">
				<div>
				</div>
				<div class="confirmTableStyle">
					<dl>
						<?php
							$className = $clean['entryDivision'];

							# 採用区分ごとのレイアウト生成
							echo $className->DisplayConfirm($clean);
						?>
					</dl>
					<!-- Token　埋め込み-->
					<input type="hidden" name="token" value="<?php
						echo htmlspecialchars(session_id(), ENT_COMPAT, 'UTF-8');
					?>">
				</div>
				<div id="confirmButtonStyle">
					<nav role="navigation">
						<ul>
							<li>
								<input id="entryButton" type="submit" value="送信">
							</li>
							<li>
								<input id="CancelButton" type="button" onClick="javascript:window.history.back();" value="戻る">
							</li>
						</ul>
					</nav>
				</div>
			</form>
		</div>
	</body>
</html>