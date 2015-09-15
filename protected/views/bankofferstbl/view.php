<?php
/* @var $this BankofferstblController */
/* @var $model Bankofferstbl */

$this->breadcrumbs=array(
	'Bankofferstbls'=>array('index'),
	$model->offer_id,
);

$this->menu=array(
	array('label'=>'List Bankofferstbl', 'url'=>array('index')),
	array('label'=>'Create Bankofferstbl', 'url'=>array('create')),
	array('label'=>'Update Bankofferstbl', 'url'=>array('update', 'id'=>$model->offer_id)),
	array('label'=>'Delete Bankofferstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->offer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bankofferstbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'offer_id',
		'offer_date',
                array('name' => 'customer_id','value' => $model->customer->customer_name),
		array('name' => 'brand_id','value' => $model->brand->brand_name),		
		array('name' => 'model_id','value' => $model->model->model_name),
		array('name' => 'code_id','value' => $model->code->code_name),
		array('name' => 'bank_id','value' => $model->bank->bank_name),
		'banker',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		'offer_status',
		'results',
		'notes',
	),
)); ?>
