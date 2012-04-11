<?php
$this->breadcrumbs=array(
	'Dealers',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiListView.update('dealers-grid', {
		data: $(this).serialize()
	});
	return false;
});
");


?>

<h1>Dealers</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.BootListView', array(
	'id'=>'dealers-grid',
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
)); ?>
