<?php
/* @var $this DealersalestblController */
/* @var $model Dealersalestbl */

$this->breadcrumbs=array(
	'Dealersalestbls'=>array('index'),
	$model->invoice_id,
);

$this->menu=array(
	array('label'=>'List Dealersalestbl', 'url'=>array('index')),
	array('label'=>'Create Dealersalestbl', 'url'=>array('create')),
	array('label'=>'Update Dealersalestbl', 'url'=>array('update', 'id'=>$model->invoice_id)),
	array('label'=>'Delete Dealersalestbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->invoice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dealersalestbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'invoice_id',
		'invoice_date',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		array('name' => 'dealer_id','value' => $model->dealer->dealer_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		'price',
		'notes',
	),
)); ?>
