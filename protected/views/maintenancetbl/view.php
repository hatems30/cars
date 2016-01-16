<?php
/* @var $this MaintenancetblController */
/* @var $model Maintenancetbl */

$this->breadcrumbs=array(
	'Maintenancetbls'=>array('index'),
	$model->m_hold_id,
);

$this->menu=array(
	array('label'=>'List Maintenancetbl', 'url'=>array('index')),
	array('label'=>'Create Maintenancetbl', 'url'=>array('create')),
	array('label'=>'Update Maintenancetbl', 'url'=>array('update', 'id'=>$model->m_hold_id)),
	array('label'=>'Delete Maintenancetbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->m_hold_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Maintenancetbl', 'url'=>array('admin')),
);
?>

<h1>View Maintenancetbl #<?php echo $model->m_hold_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'm_hold_id',
		'm_hold_date',
		'branch_id',
		'customer_id',
		'car_data',
		'm_type',
		'm_center_id',
		'm_date',
		'employee_id',
		'notes',
	),
)); ?>
