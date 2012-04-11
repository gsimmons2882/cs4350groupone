<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			<a href="../User/Register">Register New User?</a>
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

	<!--div class="form">
	<?php echo CHtml::beginForm(); ?>
 
	    <div class="row">
	        <?php echo CHtml::label('Email:', 'openid_identifier'); ?>
	        <?php echo CHtml::textField('openid_identifier', '', array('size'=>40)); ?>
	        <p class="hint">
	            Hint: You may login with <tt>https://www.google.com/accounts/o8/id</tt>.
	        </p>
	    </div>
	 
	    <div class="row buttons">
	        <?php echo CHtml::submitButton('Login'); ?>
	    </div>
 
	<?php echo CHtml::endForm(); ?>
	</div--><!-- form -->

<?php $this->endWidget(); ?>
</div><!-- form -->
