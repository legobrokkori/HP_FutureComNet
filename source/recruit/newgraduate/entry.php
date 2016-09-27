<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
	session_start();

	
	if ($_POST['entryCategory'] === ""){
		$_POST['entryCategory'] = "1";
	}

	$_POST['entryMessagge'] = "新卒採用";
	$_POST['link'] = 'http://www.f-cn.jp/fcn/admin/applicants/view/';

	require_once '../../entry/InputCheck.php';
	require_once '../../entry/entryDivision/entryDivision.php';

	# 各画面毎の振る舞い　基底クラス
	$_POST['entryDivision'] = new Newgraduate();

	# 入力チェック(php)
	$InputCheck = new InputCheck($_POST);
	$InputCheckResult = $InputCheck->CheckSubmit();

	# error がなければ post
	if (strlen($InputCheckResult) === 0){
	
		# xss
		$clean = $InputCheck->GetClean();

		# session セット
		foreach ((array)$clean as $key => $value) {

			$_SESSION[$key] = $value;
		}
	
		header('Location: https://wx07.wadax.ne.jp/~f-cn-jp/entry/confirm.php');
		exit();
	}
}

?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="FutureComNet,FCN">
<meta name="description" content="FCN | FutureComnet | ヒューチャーコムネットの新卒採用エントリーページです。">
<title>FCN | FutureComnet｜ヒューチャーコムネット</title>
<link rel="stylesheet" type="text/css" href="../../css/contents.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
<link rel="shortcut icon" type="image/gif" href="//www.f-cn.jp/image/favicon.png">
<!--<script src="//www.f-cn.jp/js/jquery-1.10.2.min.js"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!--[if IE]>
<script src="../../js/main.js/html5shiv.js"></script> 
<![endif]--> 
<script src="../../js/respond.js"></script>


<!--  入力チェックライブラリ  -->

<link rel="stylesheet" href="../../css/recruit/validationEngine.jquery.css" type="text/css">
<script src="../../js/recruit/jquery.validationEngine-ja.js" charset="utf-8"></script>
<script src="../../js/recruit/jquery.validationEngine.js"  charset="utf-8"></script>

</head>

<body>
<!--  bodyArea  -->
<div id="bodyArea">
	<div class="wrapper">
		<!--  headerArea  -->
		<header id="headerArea" role="banner">
			<div class="inner relative">
				<div id="logoArea">
					<a href="http://www.f-cn.jp/index.html"><img src="../../image/TitleLogoWeb.png" id="logoFcnImg" alt="Logo"></a>
				</div>
				<div id="siteNavListArea">
					<nav id="globalNav" role="navigation">
						<ul>
							<li class="middleNav">
								<a class="middleAnchor" href="//www.f-cn.jp/index.html">
									<i class="fa fa-home navImage"></i>
									<span class="navContentEng">home</span><span class="navContent">ホーム</span>
								</a>
							</li>
							<li class="middleNav">
								<a class="middleAnchor" href="//www.f-cn.jp/company/info.html">
									<i class="fa fa-building navImage"></i>
									<span class="navContentEng">company</span><span class="navContent">会社案内</span>
								</a>
								<ul id="subNav1">
									<li><a href="//www.f-cn.jp/company/info.html">会社概要</a></li>
									<li><a href="//www.f-cn.jp/company/qualification.html">保有資格</a></li>
								</ul>
							</li>
							<li class="middleNav">
								<a class="middleAnchor" href="//www.f-cn.jp/business/business.html">
									<i class="fa fa-pencil navImage"></i>
									<span class="navContentEng">service</span><span class="navContent">事業内容</span>
								</a>
								<ul id="subNav2">
									<li><a href="//www.f-cn.jp/business/detail/el.html">電気通信事業</a></li>
									<li><a href="//www.f-cn.jp/business/detail/mt.html">無線通信事業</a></li>
									<li><a href="//www.f-cn.jp/business/detail/ns.html">ネットワークソリューション</a></li>
									<li><a href="//www.f-cn.jp/business/detail/hs.html">人材ソリューション</a></li>
									<li><a href="//www.f-cn.jp/business/detail/wb.html">Web サイト作成</a></li>
									<li><a href="//www.f-cn.jp/business/detail/oa.html">OA機器 情報関連機器の販売・設置</a></li>
									<li><a href="//www.f-cn.jp/sorry.html">MOS エキスパートカレッジ</a></li>
								</ul>
							</li>
							<li class="middleNav">
								<a id="nowRct" class="middleAnchor" href="//www.f-cn.jp/recruit/recruit.html">
									<i class="fa fa-user navImage"></i>
									<span class="navContentEng">recruit</span><span class="navContent">採用情報</span>
								</a>
								<ul id="subNav3">
									<li><a href="//www.f-cn.jp/recruit/newgraduate/newgraduate.html">新卒採用</a></li>
									<li><a href="//www.f-cn.jp/recruit/career/career.html">キャリア採用</a></li>
									<li><a href="//www.f-cn.jp/recruit/part/part.html">アルバイト採用</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--  /#headerArea  -->

		<!--  Main area (#mainArea)  -->
		<div id="breadCrumbsArea">
			<div class="inner">
				<ul id="breadCrumbs">
					<li><a href="/"><i class="fa fa-home"></i> ホーム</a></li>
					<li><a href="//www.f-cn.jp/recruit/recruit.html">採用情報</a></li>
					<li><a href="newgraduate.html">新卒採用</a></li>
					<li><strong>新卒採用｜応募フォーム</strong></li>
				</ul>
			</div>
		</div>
		<div id="rectuitContentsArticleArea" role="main">
			<div class="inner">
				<h1 id="contentsArticle">新卒採用<br><span id="en">newgraduate</span></h1>
			</div>
			<div id="backGroundPictureGra">
			</div>
		</div>
		<div class="inner">
			<div id="mainAreaEntryForm" role="main">
				<div class="jobContents">
					<h2 class="enrtyHeader">新卒応募フォーム</h2>
					<form id="entry" name="entryForm" method="post" action="<?php echo(filter_input(INPUT_SERVER, 'PHP_SELF',FILTER_SANITIZE_STRIPPED)); ?>">
						<?php
							# error ラベル表示
							echo $InputCheckResult;
						?>
						<div class="entryTableStyle">
							<dl>
								<dt>希望職種<br>
									（複数選択可）
								</dt>
								<dd>
									<dl>
										<dt>総合職</dt>
										<dd>
											<input type="checkbox" class="validate[minCheckbox[1]" name="occupation[]" value="防災無線エンジニア">
											<label>防災無線エンジニア</label><br>
											<input type="checkbox" class="validate[minCheckbox[1]" name="occupation[]" value="ネットワークエンジニア">
											<label>ネットワークエンジニア</label><br>
											<input type="checkbox" class="validate[minCheckbox[1]" name="occupation[]" value="営業">
											<label>営業</label><br>
										</dd>
										<dt>事務職</dt>
										<dd>
											<input type="checkbox" class="validate[minCheckbox[1]" name="occupation[]" value="事務・管理">
											<label>事務・管理</label><br>
											<input type="checkbox" class="validate[minCheckbox[1]" name="occupation[]" value="TELオペレーター">
											<label>TEL オペレーター</label><br>
										</dd>
									</dl>
								</dd>
								<dt>氏名</dt>
								<dd>
									<p>
										<input id="name" type="text" style="width: 350px" name="name" class="validate[required]" value="<?php echo htmlentities($_POST['name'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
								</dd>
								<dt>氏名（かな）</dt>
								<dd>
									<p>
										<input id="nameKana" type="text" style="width: 350px" name="nameKana" class="validate[required]" value="<?php echo htmlentities($_POST['nameKana'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
								</dd>
								<dt>性別</dt>
								<dd>
									<p>
										<?php
										$checkMan = '';
										$checkWoman = '';

										if ($_POST['sex'] === '男'){
											$checkMan = 'checked="checked"';

										} else if ($_POST['sex'] === '女'){
											$checkWoman = 'checked="checked"';
										} ?>
										<input type="radio" name="sex" value="男" class="validate[required]" <?php echo $checkMan; ?>>
										<label>男</label>
										<input type="radio" name="sex" value="女" class="validate[required]" <?php echo $checkWoman; ?>>
										<label>女</label>
									</p>
								</dd>
								<dt>生年月日</dt>
								<dd>
									<p>
										<input id="birthDate" type="text" style="width: 90px" name="birthDate" class="validate[required,custom[date]]" maxlength="8"  value="<?php echo htmlentities($_POST['birthDate'], ENT_QUOTES,'UTF-8'); ?>">&nbsp;&nbsp;&nbsp;
										<input id="age" type="hidden" name="age" value="">
										<label><span class="descriptionFont">半角数字、8文字　例）19800501（1980年5月1日の場合）</span></label>
									</p>
								</dd>
								<dt>郵便番号</dt>
								<dd>
									<p>
										〒<input id="postCode1" type="text" style="width: 40px" name="postCode1" size="4" class="validate[required,custom[number]]" maxlength="3" value="<?php echo htmlentities($_POST['postCode1'], ENT_QUOTES,'UTF-8'); ?>">&nbsp;-
										<input id="postCode2" type="text" style="width: 45px" name="postCode2" size="5" class="validate[required,custom[number]]" maxlength="4" onchange="AjaxZip3.zip2addr(postCode1,postCode2,adressPrefectural,adressMunicipality,adressStreet)" value="<?php echo htmlentities($_POST['postCode2'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
								</dd>
								<dt>現住所</dt>
								<dd>
									<p>
										<select id="adressPrefectural" name="adressPrefectural" class="validate[required]">	
											<?php $sel = isset($_POST['adressPrefectural']) ? $_POST['adressPrefectural'] : ''; ?>
											<option value="" selected>--選択してください--</option>
											<option value="北海道" <?php if($sel === "北海道") echo "selected"; ?>>北海道</option>
											<option value="青森県" <?php if($sel === "青森県") echo "selected"; ?>>青森県</option>
											<option value="岩手県" <?php if($sel === "岩手県") echo "selected"; ?>>岩手県</option>
											<option value="宮城県" <?php if($sel === "宮城県") echo "selected"; ?>>宮城県</option>
											<option value="秋田県" <?php if($sel === "秋田県") echo "selected"; ?>>秋田県</option>
											<option value="山形県" <?php if($sel === "山形県") echo "selected"; ?>>山形県</option>
											<option value="福島県" <?php if($sel === "福島県") echo "selected"; ?>>福島県</option>
											<option value="東京都" <?php if($sel === "東京都") echo "selected"; ?>>東京都</option>
											<option value="神奈川県" <?php if($sel === "神奈川県") echo "selected"; ?>>神奈川県</option>
											<option value="埼玉県" <?php if($sel === "埼玉県") echo "selected"; ?>>埼玉県</option>
											<option value="千葉県" <?php if($sel === "千葉県") echo "selected"; ?>>千葉県</option>
											<option value="茨城県" <?php if($sel === "茨城県") echo "selected"; ?>>茨城県</option>
											<option value="栃木県" <?php if($sel === "栃木県") echo "selected"; ?>>栃木県</option>
											<option value="群馬県" <?php if($sel === "群馬県") echo "selected"; ?>>群馬県</option>
											<option value="山梨県" <?php if($sel === "山梨県") echo "selected"; ?>>山梨県</option>
											<option value="新潟県" <?php if($sel === "新潟県") echo "selected"; ?>>新潟県</option>
											<option value="長野県" <?php if($sel === "長野県") echo "selected"; ?>>長野県</option>
											<option value="富山県" <?php if($sel === "富山県") echo "selected"; ?>>富山県</option>
											<option value="石川県" <?php if($sel === "石川県") echo "selected"; ?>>石川県</option>
											<option value="福井県" <?php if($sel === "福井県") echo "selected"; ?>>福井県</option>
											<option value="愛知県" <?php if($sel === "愛知県") echo "selected"; ?>>愛知県</option>
											<option value="岐阜県" <?php if($sel === "岐阜県") echo "selected"; ?>>岐阜県</option>
											<option value="静岡県" <?php if($sel === "静岡県") echo "selected"; ?>>静岡県</option>
											<option value="三重県" <?php if($sel === "三重県") echo "selected"; ?>>三重県</option>
											<option value="大阪府" <?php if($sel === "大阪府") echo "selected"; ?>>大阪府</option>
											<option value="兵庫県" <?php if($sel === "兵庫県") echo "selected"; ?>>兵庫県</option>
											<option value="京都府" <?php if($sel === "京都府") echo "selected"; ?>>京都府</option>
											<option value="滋賀県" <?php if($sel === "滋賀県") echo "selected"; ?>>滋賀県</option>
											<option value="奈良県" <?php if($sel === "奈良県") echo "selected"; ?>>奈良県</option>
											<option value="和歌山県" <?php if($sel === "和歌山県") echo "selected"; ?>>和歌山県</option>
											<option value="鳥取県" <?php if($sel === "鳥取県") echo "selected"; ?>>鳥取県</option>
											<option value="島根県" <?php if($sel === "島根県") echo "selected"; ?>>島根県</option>
											<option value="岡山県" <?php if($sel === "岡山県") echo "selected"; ?>>岡山県</option>
											<option value="広島県" <?php if($sel === "広島県") echo "selected"; ?>>広島県</option>
											<option value="山口県" <?php if($sel === "山口県") echo "selected"; ?>>山口県</option>
											<option value="徳島県" <?php if($sel === "徳島県") echo "selected"; ?>>徳島県</option>
											<option value="香川県" <?php if($sel === "香川県") echo "selected"; ?>>香川県</option>
											<option value="愛媛県" <?php if($sel === "愛媛県") echo "selected"; ?>>愛媛県</option>
											<option value="高知県" <?php if($sel === "高知県") echo "selected"; ?>>高知県</option>
											<option value="福岡県" <?php if($sel === "福岡県") echo "selected"; ?>>福岡県</option>
											<option value="佐賀県" <?php if($sel === "佐賀県") echo "selected"; ?>>佐賀県</option>
											<option value="長崎県" <?php if($sel === "長崎県") echo "selected"; ?>>長崎県</option>
											<option value="熊本県" <?php if($sel === "熊本県") echo "selected"; ?>>熊本県</option>
											<option value="大分県" <?php if($sel === "大分県") echo "selected"; ?>>大分県</option>
											<option value="宮崎県" <?php if($sel === "宮城県") echo "selected"; ?>>宮崎県</option>
											<option value="鹿児島県" <?php if($sel === "鹿児島県") echo "selected"; ?>>鹿児島県</option>
											<option value="沖縄県" <?php if($sel === "沖縄県") echo "selected"; ?>>沖縄県</option>
											?>
										</select>
									</p>
									<p>
										<input id="adressMunicipality" type="text" style="width: 550px" name="adressMunicipality" class="validate[required]" value="<?php echo htmlentities($_POST['adressMunicipality'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
									<p>
										<label><span class="descriptionFont">市区町村名（例：足立区～～～）</span></label>
									</p>
									<p>
										<input id="adressStreet" type="text" style="width: 550px" name="adressStreet" value="<?php echo htmlentities($_POST['adressStreet'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
									<p>
										<label><span class="descriptionFont">番地・ビル名</span></label>
									</p>
								</dd>
								<dt>電話番号</dt>
								<dd>
									<p>
										<input id="telNo" type="text" name="telNo"  class="validate[required],custom[phone]" value="<?php echo htmlentities($_POST['telNo'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
									<p>
										<label><span class="descriptionFont">※日中つながりやすいお電話番号</span></label>
									</p>
								</dd>
								<dt>メールアドレス</dt>
								<dd>
									<p>
										<input id="mailAdress" type="text" style="width: 550px" name="mailAdress" class="validate[required],custom[email]" value="<?php echo htmlentities($_POST['mailAdress'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
									<p>
										<label><span class="descriptionFont">※念のためもう一度入力をお願いします。</span></label>
									</p>
									<p>
										<input id="confirmMailAdress" type="text" style="width: 550px" name="confirmMailAdress"  class="validate[required,equals[mailAdress]]" value="<?php echo htmlentities($_POST['confirmMailAdress'], ENT_QUOTES,'UTF-8'); ?>">
									</p>
								</dd>
								<dt>備考</dt>
								<dd>
									<p style="margin: 10px 0 10px 0">
										<textarea id="notes" style="width: 550px" rows=5 name="remarks" placeholder="あなたのアピールポイントをご記入ください" value="<?php echo htmlentities($_POST['remarks'], ENT_QUOTES,'UTF-8'); ?>"></textarea>
									</p>
								</dd>
							</dl>
						</div>
						<div id="infoProvision" style="overflow:auto; width:600px; height:150px; margin: 0 0 0 75px; border:1px solid #e3e3e3;">
						</div>
						<div style="margin:40px 0 0 250px; width:300px;">
							<input id="provisionConsent" type="checkbox" class="validate[required]" name="provisionConsent">
							<label>個人情報取り扱いに同意する</label>
						</div>
						<div id="entryOrCancelButtonArea">
							<nav role="navigation">
								<ul>
									<li>
										<input id="entryButton" type="submit" value="応募する">
									</li>
									<li>
										<input id="CancelButton" type="button" onClick="window.close();" value="閉じる">
									</li>
								</ul>
							</nav>
						</div>
						<input id="entryCategory" type="hidden" name="entryCategory">
					</form>
				<script type="text/javascript" src="../../entry/mailform.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
		<!--  /#mainArea  -->
		 
		<!--  footerArea  -->
		<footer id="footerArea">
			<div class="inner">
				<ul><a href="http://www.f-cn.jp/company/info.html"><i class="fa fa-building"></i> 会社案内</a>
					<li><a href="http://www.f-cn.jp/company/info.html">会社概要</a></li>
					<li><a href="http://www.f-cn.jp/company/qualification.html">保有資格</a></li>
				</ul>
				<ul><a href="http://www.f-cn.jp/business/business.html"><i class="fa fa-pencil"></i> 事業内容</a>
					<li><a href="http://www.f-cn.jp/sorry.html">電気通信事業</a></li>
					<li><a href="http://www.f-cn.jp/sorry.html">無線通信事業</a></li>
					<li><a href="http://www.f-cn.jp/sorry.html">ネットワークソリューション</a></li>
					<li><a href="http://www.f-cn.jp/sorry.html">ソリューション</a></li>
					<li><a href="//www.f-cn.jp/sorry.html">OA機器 情報関連機器の販売・設置</a></li>
					<li><a href="http://www.f-cn.jp/sorry.html">Web サイト作成</a></li>
					<li><a href="http://www.f-cn.jp/sorry.html">MOS エキスパートカレッジ</a></li>
				</ul>
				<ul><a href="http://www.f-cn.jp/recruit/recruit.html"><i class="fa fa-user"></i> 採用情報</a>
					<li><a href="http://www.f-cn.jp/recruit/newgraduate/newgraduate.html">新卒採用</a></li>
					<li><a href="http://www.f-cn.jp/recruit/career/career.html">キャリア契約</a></li>
					<li><a href="http://www.f-cn.jp/recruit/part/part.html">アルバイト採用</a></li>
				</ul>
				<div id="socialMadiaArea">
					<a href="#" class="fa fa-twitter-square fa-3x"></a>
					<a href="#" class="fa fa-facebook-square fa-3x"></a>
					<a href="#" class="fa fa-youtube-square fa-3x"></a>
				</div>
			</div>
		</footer>
		<!--  /#footerArea  -->	
	</div>
	<!--  /#wrapper  -->
</div>  <!-- #bodyArea End-->

<!-- 個人情報規定ファイルの読み込み -->
<script src="../../js/importPersonalInfo.js"></script>
<!--  郵便番号検索機能設置  -->
<script src="https://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3-https.js" charset="UTF-8"></script>

<script src="../../js/jquery.cookie.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>
