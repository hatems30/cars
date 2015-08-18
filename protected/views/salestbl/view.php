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
                array('name' => 'branch_id','value' => $model->branch->branch_name),
                array('name' => 'sales_man_id','value' => $model->salesmantbl->sales_man_name),
                array('name' => 'car_id','value' => $model->carstbl->chass_no),
		array('name' => 'customer_id','value' => $model->customers->customer_name),		
		'finance_type',
		'cach_price',
		'downpayment',
		'monthly_premium',
		'months_count',
		'interest_rate',
	        array('name' => 'bank_id','value' => $model->banks->bank_name),	            
		'transfer_amount',
		'bank_down_amount',
		'expenses',
		array('name' => 'insurance_comp_id','value' => $model->inscomps->insurance_comp_name),                
		'insurance_type',
		'insurance_amount',
		'insurance_rate',
		'notes',
	),
)); ?>
