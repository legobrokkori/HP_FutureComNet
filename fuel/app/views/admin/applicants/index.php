
<?php if ($Applicants): ?>
<?php
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>応募区分</th>
			<th>エントリー日</th>
			<th>希望職種</th>
			<th>応募者名</th>
			<th>性別</th>
			<th>年齢</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php 

foreach ($Applicants as $item): ?>		<tr>

			<td><?php echo $item->entrycategory_id->name ;?></td>
			<td><?php echo $item->entrydate; ?></td>
			<td><?php echo $item->occupation; ?></td>
			<td><?php echo $item->applicant; ?></td>
			<td><?php echo $item->sex; ?></td>
			<td><?php echo $item->age; ?></td>
			<td>
				<?php echo Html::anchor('admin/applicants/view/'.$item->id, '表示'); ?> |
				<?php echo Html::anchor('admin/applicants/edit/'.$item->id, '編集'); ?> |
				<?php echo Html::anchor('admin/applicants/delete/'.$item->id, '削除', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>
<?php echo Pagination::instance('mypagination')->render(); ?>

<?php else: ?>
<p>No Applicants.</p>

<?php endif; ?><p>
	<!--<?php echo Html::anchor('admin/applicants/create', 'Add new Applicant', array('class' => 'btn btn-success')); ?>
-->
</p>
