<?php
$this->breadcrumbs=array(
	'Comments',
);
?>

<h1>Comments</h1>

<?php $this->widget('bootstrap.widgets.BootListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
