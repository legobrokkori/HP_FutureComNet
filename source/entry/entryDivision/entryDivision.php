<?php

abstract class EntryDivision
{

	# MySQLへ接続する準備。DB名や認証に必要な情報を格納
	protected $dsn = '';
	protected $user = '';
	protected $pass = '';
	protected $db = "";
	protected $entryNo = "";

	public function DbConnect($dsn,$user,$pass){

		# 接続情報のセット
		$this->dsn = $dsn;
		$this->user = $user;
		$this->pass = $pass;

		# DB接続
		$this->db = new PDO($this->dsn,$this->user,$this->pass,
							array(PDO::ATTR_EMULATE_PREPARES => false));
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function SelectCount(){

		$this->db->beginTransaction();

		# entryNo 生成
		$selectQueryResult = $this->db->query("select MAX(id) from applicants for update");
		$countResult = $selectQueryResult->fetchColumn();
		$countResult += 1;
		$this->entryNo = sprintf("%04d", $countResult);
	}

	public function getEntryNo(){
		return $this->entryNo;
	}


	public function DbRollback(){

		$this->db->rollback();
	}

	# データ insert 抽象メソッド
	abstract function InsertData($input);

	# データ 画面表示 抽象メソッド
	abstract function DisplayConfirm($input);
}

class Newgraduate extends EntryDivision
{

	public function InsertData($input){

		# 新卒採用ページ専用入力項目を作成
		$insertQuery = "INSERT INTO applicants (id,entryCategory,entrydate,occupation,applicant,applicantkana,sex,birthdate,age,postCode1,postCode2,adressprefectural,adressmunicipality,adressstreet,telno,mailadress,remarks)
						VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $this->db->prepare($insertQuery);
		$insertResult = $statement->execute(array($this->entryNo,$input['entryCategory'],date('Y-m-d H:i:s'),$input['occupation'],
												$input['name'],$input['nameKana'],$input['sex'],$input['birthDate'],$input['age'],
												$input['postCode1'],$input['postCode2'],$input['adressPrefectural'],
												$input['adressMunicipality'],$input['adressStreet'],$input['telNo'],$input['mailAdress'],$input['remarks']));

		$this->db->commit();
	}

	public function DisplayConfirm($input){

		# 新卒採用ページ専用入力項目を作成
		$htmlElements = "";
		$htmlElements = "<dt>希望職種</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['occupation'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['name'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名（かな）</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['nameKana'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>性別</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['sex'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>生年月日</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['birthDate'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>郵便番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.= $input['postCode1'] ." - " . $input['postCode2'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>現住所</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressPrefectural'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressMunicipality'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressStreet'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>電話番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['telNo'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>メールアドレス</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['mailAdress'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.= "<dt>備考</dt>\n";
		$htmlElements.=	"<dd>" .$input['remarks'] ."</dd>";

		return $htmlElements;
	}
}

class Career extends EntryDivision
{

	public function InsertData($input){

		# キャリア採用ページ専用入力項目を作成
		$insertQuery = "INSERT INTO applicants (id,entryCategory,entrydate,occupation,applicant,applicantkana,sex,birthdate,age,postCode1,postCode2,adressprefectural,adressmunicipality,adressstreet,telno,mailadress,skillExcell,skillWord,skillPowerPoint,skillVisio,appealPoint,remarks)
						VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $this->db->prepare($insertQuery);
		$insertResult = $statement->execute(array($this->entryNo,$input['entryCategory'],date('Y-m-d H:i:s'),$input['occupation'],
												$input['name'],$input['nameKana'],$input['sex'],$input['birthDate'],$input['age'],
												$input['postCode1'],$input['postCode2'],$input['adressPrefectural'],
												$input['adressMunicipality'],$input['adressStreet'],$input['telNo'],$input['mailAdress'],
												$input['skillExcell'],$input['skillWord'],$input['skillPowerPoint'],$input['skillVisio'],
												$input['appealPoint'],$input['remarks']));

		$this->db->commit();
	}


	public function DisplayConfirm($input){

		# キャリア採用ページ専用入力項目を作成
		$htmlElements = "";
		$htmlElements = "<dt>希望職種</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['occupation'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['name'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名（かな）</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['nameKana'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>性別</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['sex'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>生年月日</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['birthDate'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>郵便番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.= $input['postCode1'] ." - " . $input['postCode2'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>現住所</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressPrefectural'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressMunicipality'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressStreet'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>電話番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['telNo'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>メールアドレス</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['mailAdress'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.= "<dt>スキル</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	"<label>Excel</label><br>";
		$htmlElements.=	$input['skillExcell'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	"<label>Word</label><br>";
		$htmlElements.=	$input['skillWord'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	"<label>PowerPoint</label><br>";
		$htmlElements.= $input['skillPowerPoint'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	"<label>Visio</label><br>";
		$htmlElements.=	$input['skillVisio'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	"<label>アピールポイント</label><br>";
		$htmlElements.=	$input['appealPoint'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.= "<dt>備考</dt>\n";
		$htmlElements.=	"<dd>" .$input['remarks'] ."</dd>";

		return $htmlElements;
	}
}

class part extends EntryDivision
{

	public function InsertData($input){

		# アルバイト採用ページ専用入力項目を作成
		$insertQuery = "INSERT INTO applicants (id,entryCategory,entrydate,occupation,applicant,applicantkana,sex,birthdate,age,postCode1,postCode2,adressprefectural,adressmunicipality,adressstreet,telno,mailadress)
						VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $this->db->prepare($insertQuery);
		$insertResult = $statement->execute(array($this->entryNo,$input['entryCategory'],date('Y-m-d H:i:s'),$input['occupation'],
												$input['name'],$input['nameKana'],$input['sex'],$input['birthDate'],$input['age'],
												$input['postCode1'],$input['postCode2'],$input['adressPrefectural'],
												$input['adressMunicipality'],$input['adressStreet'],$input['telNo'],$input['mailAdress']));

		$this->db->commit();
	}

	public function DisplayConfirm($input){

		# アルバイト採用ページ専用入力項目を作成
		$htmlElements = "";
		$htmlElements = "<dt>希望職種</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['occupation'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['name'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名（かな）</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['nameKana'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>性別</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['sex'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>生年月日</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['birthDate'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>郵便番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.= $input['postCode1'] ." - " . $input['postCode2'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>現住所</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressPrefectural'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressMunicipality'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressStreet'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>電話番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['telNo'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>メールアドレス</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['mailAdress'] ."</p>";
		$htmlElements.=	"</dd>\n";

		return $htmlElements;
	}
}

class Purchaser extends EntryDivision
{

	public function InsertData($input){

		# アルバイト採用ページ専用入力項目を作成
		$insertQuery = "INSERT INTO applicants (id,entryCategory,entrydate,occupation,applicant,applicantkana,sex,birthdate,age,postCode1,postCode2,adressprefectural,adressmunicipality,adressstreet,telno,mailadress)
						VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $this->db->prepare($insertQuery);
		$insertResult = $statement->execute(array($this->entryNo,$input['entryCategory'],date('Y-m-d H:i:s'),$input['occupation'],
												$input['name'],$input['nameKana'],$input['sex'],$input['birthDate'],$input['age'],
												$input['postCode1'],$input['postCode2'],$input['adressPrefectural'],
												$input['adressMunicipality'],$input['adressStreet'],$input['telNo'],$input['mailAdress']));

		$this->db->commit();
	}

	public function DisplayConfirm($input){

		# 購入予定ページ専用入力項目を作成
		$htmlElements = "";
		$htmlElements = "<dt>ご購入予定の商品</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['products'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['name'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>氏名（かな）</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['nameKana'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>生年月日</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['birthDate'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>郵便番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.= $input['postCode1'] ." - " . $input['postCode2'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>現住所</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressPrefectural'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressMunicipality'] ."</p>";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['adressStreet'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>電話番号</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['telNo'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>メールアドレス</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['mailAdress'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>クレジットカード</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['creditcard'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>ご希望連絡日時</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	"曜日：" . $input['contactweek'] ."時間帯". $input['contactweek'] ."</p>";
		$htmlElements.=	"</dd>\n";
		$htmlElements.=	"<dt>ご希望<br>連絡方法</dt>\n";
		$htmlElements.=	"<dd>\n";
		$htmlElements.=	"<p>";
		$htmlElements.=	$input['hopemethod'] ."</p>";
		$htmlElements.=	"</dd>\n";

		return $htmlElements;
	}
}
?>