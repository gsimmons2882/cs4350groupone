<?php
$this->breadcrumbs=array(
	'Register',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Register</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>