<?php
$this->breadcrumbs=array(
	'Dealers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dealers', 'url'=>array('index')),
	array('label'=>'Create Dealers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dealers-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dealers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootGridView', array(
	'id'=>'dealers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'License_Number',
		'Region',
		'District',
		'County',
		'Type',
		'Expiration',
		/*
		'Sequence_Num',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
