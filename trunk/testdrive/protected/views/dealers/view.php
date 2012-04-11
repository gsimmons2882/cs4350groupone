<?php
$this->breadcrumbs=array(
	'Dealers'=>array('index'),
	$model->Business_Name,
);

$this->menu=array(
	array('label'=>'List Dealers', 'url'=>array('index')),
	array('label'=>'Create Dealers', 'url'=>array('create')),
	array('label'=>'Update Dealers', 'url'=>array('update', 'id'=>$model->License_Number)),
	array('label'=>'Delete Dealers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->License_Number),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dealers', 'url'=>array('admin')),
);
?>

<h1>View Dealer <?php echo $model->Business_Name; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'License_Number',
		'License_Name',
		'Business_Name',
		'Business_Bio',
		'Premise_Address',
		'Premise_City',
		'Premise_State',
		'Premise_Zip',
		'Mail_Street',
		'Mail_City',
		'Mail_State',
		'Mail_Zip',
		'Phone',
		'Issue_Date',
		'Expire_Date',
		'Accept_Transfers',
		'Transfer_Fee',
	),
)); ?>

<?php $this->widget('application.extensions.WSocialButton', array('style'=>'box'));?>

