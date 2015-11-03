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



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'invoice_id',
		'invoice_date',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		array('name' => 'customer_id','value' => $model->customer->customer_name),
		'finance_type',
		'car_price',
		'downpayment',
		'monthly_premium',
		'months_count',
		'interest_rate',
		array('name' => 'bank_id','value' => isset($model->bank->bank_name)?$model->bank->bank_name:''),
		'transfer_amount',
		'bank_down_amount',
		'expenses',
                array('name' => 'insurance_comp_id','value' => isset($model->insuranceComp->insurance_comp_name)?$model->insuranceComp->insurance_comp_name:''),		
		'insurance_type',
		'insurance_amount',
		'insurance_rate',
		'notes',
	),
)); ?>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>200)); ?>
