<?php
/* @var $this ComplaintstblController */
/* @var $model Complaintstbl */

$this->breadcrumbs=array(
	'Complaintstbls'=>array('index'),
	$model->complaint_id,
);

$this->menu=array(
	array('label'=>'List Complaintstbl', 'url'=>array('index')),
	array('label'=>'Create Complaintstbl', 'url'=>array('create')),
	array('label'=>'Update Complaintstbl', 'url'=>array('update', 'id'=>$model->complaint_id)),
	array('label'=>'Delete Complaintstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->complaint_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Complaintstbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'complaint_id',
		'complaint_date',
                array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		'customer_name',
		'car_data',
		'complaint_detail',
		'notes',
	),
)); ?>
