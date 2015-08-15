<?php
/* @var $this SalestblController */
/* @var $model Salestbl */

$this->breadcrumbs=array(
	'Salestbls'=>array('index'),
	$model->invoice_id,
);

$this->menu=array(
	array('label'=>'List Salestbl', 'url'=>array('index')),
	array('label'=>'Create Salestbl', 'url'=>array('create')),
	array('label'=>'Update Salestbl', 'url'=>array('update', 'id'=>$model->invoice_id)),
	array('label'=>'Delete Salestbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->invoice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salestbl', 'url'=>array('admin')),
);
?>

<h1>View Salestbl #<?php echo $model->invoice_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'invoice_id',
		'invoice_date',
		'branch_id',
		'sales_man_id',
		'car_id',
		'customer_id',
		'finance_type',
		'cach_price',
		'downpayment',
		'monthly_premium',
		'months_count',
		'interest_rate',
		'bank_id',
		'transfer_amount',
		'bank_down_amount',
		'expenses',
		'insurance_comp_id',
		'insurance_type',
		'insurance_amount',
		'insurance_rate',
		'notes',
	),
)); ?>