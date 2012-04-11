<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'License_Number'); ?>
		<?php echo $form->textField($model,'License_Number',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	
	<div class="row">
		<?php echo $form->label($model,'License_Name'); ?>
		<?php echo $form->textField($model,'License_Name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Business_Name'); ?>
		<?php echo $form->textField($model,'Business_Name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Premise_Zip'); ?>
		<?php echo $form->textField($model,'Premise_Zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Premise_City'); ?>
		<?php echo $form->textField($model,'Premise_City'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'Phone'); ?>
		<?php echo $form->textField($model,'Phone'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->