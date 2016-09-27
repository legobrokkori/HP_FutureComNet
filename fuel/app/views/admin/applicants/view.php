<?php echo Asset::css('admin/applicants/view.css'); ?>

<h2>Viewing #<?php echo $Applicant->id; ?></h2>

<div class="tableStyle">
	<dl>
		<dt>応募区分:</dt>
		<dd>
			<?php echo $Applicant->entrycategory_id->name ?>
		</dd>
		<dt>エントリー日:</dt>
		<dd>
			<?php echo $Applicant->entrydate; ?>
		</dd>
		<dt>希望職種:</dt>
		<dd>
			<?php echo $Applicant->occupation; ?>
		</dd>
		<dt>応募者名（カナ）:</dt>
		<dd>
			<?php echo $Applicant->applicantkana; ?>
		</dd>
		<dt>応募者名:</dt>
		<dd>
			<?php echo $Applicant->applicant; ?>
		</dd>
		<dt>誕生日:</dt>
		<dd>
			<?php echo $Applicant->birthdate; ?>
		</dd>
		<dt>性別:</dt>
		<dd>
			<?php echo $Applicant->sex; ?>
		</dd>
		<dt>年齢:</dt>
		<dd>
			<?php echo $Applicant->age; ?>
		</dd>
		<dt>郵便番号:</dt>
		<dd>
			<?php echo $Applicant->postCode1; ?>-<?php echo $Applicant->postCode2; ?>
		</dd>
		<dt>現住所:</dt>
		<dd>
			<?php echo $Applicant->adressprefectural; ?><br>
			<?php echo $Applicant->adressmunicipality; ?><br>
			<?php echo $Applicant->adressstreet; ?>
		</dd>
		<dt>電話番号:</dt>
		<dd>
			<?php echo $Applicant->telno; ?>
		</dd>
		<dt>メールアドレス:</dt>
		<dd>
			<?php echo $Applicant->mailadress; ?>
		</dd>
	</dl>
</div>

<?php echo Html::anchor('admin/applicants/edit/'.$Applicant->id, '編集'); ?> |
<?php echo Html::anchor('admin/applicants', '戻る'); ?>