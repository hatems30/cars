<?php
/* @var $this VisitstblController */
/* @var $model Visitstbl */

$this->breadcrumbs=array(
	'Visitstbls'=>array('index'),
	$model->visit_id,
);

$this->menu=array(
	array('label'=>'List Visitstbl', 'url'=>array('index')),
	array('label'=>'Create Visitstbl', 'url'=>array('create')),
	array('label'=>'Update Visitstbl', 'url'=>array('update', 'id'=>$model->visit_id)),
	array('label'=>'Delete Visitstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->visit_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitstbl', 'url'=>array('admin')),
);
?>

<h1>View Visitstbl #<?php echo $model->visit_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'visit_id',
		'visit_date',
                array('name' => 'branch_id','value' => $model->branch->branch_name),
		'customer_name',
		'car_data',
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		'emp_comment',
	),
)); ?>
