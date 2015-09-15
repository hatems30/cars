<?php
/* @var $this CompanysalestblController */
/* @var $model Companysalestbl */

$this->breadcrumbs=array(
	'Companysalestbls'=>array('index'),
	$model->invoice_id,
);

$this->menu=array(
	array('label'=>'List Companysalestbl', 'url'=>array('index')),
	array('label'=>'Create Companysalestbl', 'url'=>array('create')),
	array('label'=>'Update Companysalestbl', 'url'=>array('update', 'id'=>$model->invoice_id)),
	array('label'=>'Delete Companysalestbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->invoice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Companysalestbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'invoice_id',
		'invoice_date',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		'price',
                array('name' => 'company_id','value' => $model->company->company_name),
		'notes',
	),
)); ?>
