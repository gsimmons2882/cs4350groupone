<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dealers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'License_Number'); ?>
		<?php echo $form->textField($model,'License_Number',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'License_Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Region'); ?>
		<?php echo $form->textField($model,'Region'); ?>
		<?php echo $form->error($model,'Region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'District'); ?>
		<?php echo $form->textField($model,'District'); ?>
		<?php echo $form->error($model,'District'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'County'); ?>
		<?php echo $form->textField($model,'County'); ?>
		<?php echo $form->error($model,'County'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type'); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Expiration'); ?>
		<?php echo $form->textField($model,'Expiration',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Expiration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sequence_Num'); ?>
		<?php echo $form->textField($model,'Sequence_Num'); ?>
		<?php echo $form->error($model,'Sequence_Num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'License_Name'); ?>
		<?php echo $form->textField($model,'License_Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'License_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Business_Name'); ?>
		<?php echo $form->textField($model,'Business_Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Business_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Business_Bio'); ?>
		<?php echo $form->textArea($model,'Business_Bio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Business_Bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Premise_Address'); ?>
		<?php echo $form->textField($model,'Premise_Address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Premise_Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Premise_City'); ?>
		<?php echo $form->textField($model,'Premise_City',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Premise_City'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Premise_State'); ?>
		<?php echo $form->textField($model,'Premise_State',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Premise_State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Premise_Zip'); ?>
		<?php echo $form->textField($model,'Premise_Zip'); ?>
		<?php echo $form->error($model,'Premise_Zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mail_Street'); ?>
		<?php echo $form->textField($model,'Mail_Street',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Mail_Street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mail_City'); ?>
		<?php echo $form->textField($model,'Mail_City',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Mail_City'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mail_State'); ?>
		<?php echo $form->textField($model,'Mail_State',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Mail_State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mail_Zip'); ?>
		<?php echo $form->textField($model,'Mail_Zip'); ?>
		<?php echo $form->error($model,'Mail_Zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone'); ?>
		<?php echo $form->textField($model,'Phone'); ?>
		<?php echo $form->error($model,'Phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Issue_Date'); ?>
		<?php echo $form->textField($model,'Issue_Date'); ?>
		<?php echo $form->error($model,'Issue_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Expire_Date'); ?>
		<?php echo $form->textField($model,'Expire_Date'); ?>
		<?php echo $form->error($model,'Expire_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Accept_Transfers'); ?>
		<?php echo $form->textField($model,'Accept_Transfers'); ?>
		<?php echo $form->error($model,'Accept_Transfers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Transfer_Fee'); ?>
		<?php echo $form->textField($model,'Transfer_Fee'); ?>
		<?php echo $form->error($model,'Transfer_Fee'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->