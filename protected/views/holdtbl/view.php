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



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hold_id',
		'hold_date',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		array('name' => 'customer_id','value' => $model->customer->customer_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		'sale_type',
		'price',
		'hold_amount',
		'notes',
	),
)); ?>
