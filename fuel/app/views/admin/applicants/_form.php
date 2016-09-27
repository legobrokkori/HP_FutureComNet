<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Entrycategory', 'entrycategory', array('class'=>'control-label')); ?>

				<?php echo Form::input('entrycategory', Input::post('entrycategory', isset($Applicant) ? $Applicant->entrycategory : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Entrycategory')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Entrydate', 'entrydate', array('class'=>'control-label')); ?>

				<?php echo Form::input('entrydate', Input::post('entrydate', isset($Applicant) ? $Applicant->entrydate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Entrydate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Occupation', 'occupation', array('class'=>'control-label')); ?>

				<?php echo Form::input('occupation', Input::post('occupation', isset($Applicant) ? $Applicant->occupation : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Occupation')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Applicant', 'applicant', array('class'=>'control-label')); ?>

				<?php echo Form::input('applicant', Input::post('applicant', isset($Applicant) ? $Applicant->applicant : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Applicant')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Sex', 'sex', array('class'=>'control-label')); ?>

				<?php echo Form::input('sex', Input::post('sex', isset($Applicant) ? $Applicant->sex : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Sex')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Age', 'age', array('class'=>'control-label')); ?>

				<?php echo Form::input('age', Input::post('age', isset($Applicant) ? $Applicant->age : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Age')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>