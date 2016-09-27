<?php 
class InputCheck
{

	# Property
	private $errFlag = false;
	private $errMessage = "";
	private $clean = array();

	# Constructor
	function __construct($input = null){

		$this->errMessage = ""; 

		# checkBox、radioButton 空時の対応
		#if (!isset($input['occupation'])) {
		#	$this->clean['occupation'] = "";
		#}
		#if (!isset($input['sex'])) {
	#		$this->clean['sex'] = "";
	#	}

		# clean 配列にxss後の値をセット
		foreach ((array)$input as $key => $value) {

			if ((($key === "occupation") || ($key === "products") || ($key === "hopemethod")) && ($value !== "") && is_array($value)) {

				# 文字コードencoding チェック
				if (! mb_check_encoding(implode(",", $value),'UTF-8')){

					die("<p class=\"error_messe\">文字エンコーディングが不正です。</p>\n");
				}

				$this->clean[$key] = htmlentities(implode(",", $value), ENT_QUOTES,'UTF-8');

			} elseif($key === "entryDivision") {

				$this->clean[$key] = $value;
			} else {
				# 文字コードencoding チェック
				if (! mb_check_encoding($value,'UTF-8')){
				
					die("<p class=\"error_messe\">文字エンコーディングが不正です。</p>\n");
				}

				# XSS
				$this->clean[$key] = htmlentities($value, ENT_QUOTES,'UTF-8');
			}
		}		
	}

	# Method
	private function isRequired($input = null){

		$this->errFlag = false;
		if (isset($input) && strlen($input) < 1){

			$this->errFlag = true;
		}
		return $this->errFlag; 
	}

	private function isControlString($input = null){

		$this->errFlag = false;
		if (preg_match("/\A[\r\n\t[:^cntrl:]]\z/u", $input)){

			$this->errFlag = true;
		}
		return $this->errFlag;		
	}

	private function isNumeric($input = null){

		$this->errFlag = false;
		if (!preg_match("/^[0-9]+$/", $input)){

			$this->errFlag = true;
		}
		return $this->errFlag; 		
	}

	private function isMailFormat($input = null){

		$this->errFlag = false;
		if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $input)){

			$this->errFlag = true;
		}
		return $this->errFlag; 		
	}

	public function CheckSubmit(){

		$this->errMessage = ""; 
		foreach ($this->clean as $key => $value) {

			switch ($key) {

				case 'occupation':
	
					# 必須チェック
					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">希望職種は必須項目です</p>\n";
					}
					break;

				case 'name':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">氏名は必須項目です</p>\n";
					}
					# 制御文字チェック
					if ($this->isControlString($value)){

						$this->errMessage .= "<p class=\"error_messe\">氏名に制御文字列が使用されています。</p>\n";
					}
					break;

				case 'nameKana':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">氏名（かな）は必須項目です</p>\n";
					}
					# 制御文字チェック
					if ($this->isControlString($value)){

						$this->errMessage .= "<p class=\"error_messe\">氏名（かな）に制御文字列が使用されています。</p>\n";
					}
					break;


				case 'sex':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">性別は必須項目です</p>\n";
					}
					break;

				case 'birthDate':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">生年月日は必須項目です</p>\n";
						break;
					}

					# 数値チェック
					if ($this->isNumeric($value)){

						$this->errMessage .= "<p class=\"error_messe\">生年月日は半角数値で入力してください</p>\n";
					}
					break;

				case 'postCode1':
				case 'postCode2':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">郵便番号は必須項目です</p>\n";
						break;
					}

					# 数値チェック
					if ($this->isNumeric($value)){

						$this->errMessage .= "<p class=\"error_messe\">郵便番号は半角数値で入力してください</p>\n";
					}
					break;
					
				case 'adressPrefectural':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">住所（都道府県）は必須項目です</p>\n";
					}
					break;
					
				case 'adressMunicipality':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">住所は必須項目です</p>\n";
					}
					# 制御文字チェック
					if ($this->isControlString($value)){

						$this->errMessage .= "<p class=\"error_messe\">住所に制御文字列が使用されています。</p>\n";
					}
					break;

				case 'adressStreet':
					# 制御文字チェック
					if ($this->isControlString($value)){

						$this->errMessage .= "<p class=\"error_messe\">住所に制御文字列が使用されています。</p>\n";
					}
					break;

				case 'telNo':
					# 必須チェック
					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">電話番号は必須項目です</p>\n";
						break;
					}

					# 数値チェック
					if ($this->isNumeric($value)){

						$this->errMessage .= "<p class=\"error_messe\">電話番号は半角数値で入力してください</p>\n";
					}
					break;

				case 'mailAdress':
					# 必須チェック

					if ($this->isRequired($value)){

						$this->errMessage .= "<p class=\"error_messe\">メールアドレスは必須項目です</p>\n";
						break;
					}

					# メールアドレスチェック
					if ($this->isMailFormat($value)){

						$this->errMessage .= "<p class=\"error_messe\">メールアドレスが不正です</p>\n";
					}
					break;

				case 'confirmMailAdress':
					# 
					if ($value !== $this->clean['mailAdress']){

						$this->errMessage .= "<p class=\"error_messe\">メールアドレスが一致しません</p>\n";
					}
					break;

				case 'appealPoint':
					# 制御文字チェック
					if ($this->isControlString($value)){

						$this->errMessage .= "<p class=\"error_messe\">アピールポイントに制御文字列が使用されています。</p>\n";
					}
					break;

				case 'remarks':
					# 制御文字チェック
					if ($this->isControlString($value)){

						$this->errMessage .= "<p class=\"error_messe\">備考に制御文字列が使用されています。</p>\n";
					}
					break;

			}
		}
		return $this->errMessage;
	}


	public function GetClean(){
		return $this->clean;
	}
}
?>