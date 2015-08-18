<?php
/* @var $this HoldtblController */
/* @var $model Holdtbl */

$this->breadcrumbs=array(
	'Holdtbls'=>array('index'),
	$model->hold_id,
);

$this->menu=array(
	array('label'=>'List Holdtbl', 'url'=>array('index')),
	array('label'=>'Create Holdtbl', 'url'=>array('create')),
	array('label'=>'Update Holdtbl', 'url'=>array('update', 'id'=>$model->hold_id)),
	array('label'=>'Delete Holdtbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->hold_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Holdtbl', 'url'=>array('admin')),
);
?>

<h1>View Holdtbl #<?php echo $model->hold_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hold_id',
		array('name' => 'car_id','value' => $model->carstbl->chass_no),
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'sales_man_id','value' => $model->salesmantbl->sales_man_name),
		'customer_name',
		'notes',
	),
)); ?>
