<?php
$this->breadcrumbs=array(
	'Dealers'=>array('index'),
	$model->License_Number=>array('view','id'=>$model->License_Number),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dealers', 'url'=>array('index')),
	array('label'=>'Create Dealers', 'url'=>array('create')),
	array('label'=>'View Dealers', 'url'=>array('view', 'id'=>$model->License_Number)),
	array('label'=>'Manage Dealers', 'url'=>array('admin')),
);
?>

<h1>Update Dealers <?php echo $model->License_Number; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>