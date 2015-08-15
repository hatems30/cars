<?php
/* @var $this BanksController */
/* @var $model Banks */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	$model->bank_id,
);

$this->menu=array(
	array('label'=>'List Banks', 'url'=>array('index')),
	array('label'=>'Create Banks', 'url'=>array('create')),
	array('label'=>'Update Banks', 'url'=>array('update', 'id'=>$model->bank_id)),
	array('label'=>'Delete Banks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bank_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banks', 'url'=>array('admin')),
);
?>

<h1>View Banks #<?php echo $model->bank_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bank_id',
		'bank_name',
	),
)); ?>
