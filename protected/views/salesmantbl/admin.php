<?php
/* @var $this SalesmantblController */
/* @var $model Salesmantbl */

$this->breadcrumbs=array(
	'Salesmantbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salesmantbl', 'url'=>array('index')),
	array('label'=>'Create Salesmantbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salesmantbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salesmantbls</h1>

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

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salesmantbl-grid',
	'dataProvider'=>$model->search() ,
	'filter'=>$model,
	'columns'=>array(
		'sales_man_id',
		'sales_man_name',
		'branch_id',                 
		'manager_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
