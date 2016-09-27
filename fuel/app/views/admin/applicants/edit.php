<h2>Editing Applicant</h2>
<br>

<?php echo render('admin/applicants/_form'); ?>
<p>
	<?php echo Html::anchor('admin/applicants/view/'.$Applicant->id, 'View'); ?> |
	<?php echo Html::anchor('admin/applicants', 'Back'); ?></p>
