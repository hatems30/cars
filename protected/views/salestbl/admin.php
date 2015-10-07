<?php
/* @var $this SalestblController */
/* @var $model Salestbl */

$this->breadcrumbs=array(
	'Salestbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salestbl', 'url'=>array('index')),
	array('label'=>'Create Salestbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salestbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">البيع المباشر</font></b></div>           
               
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salestbl-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'invoice_id',
		'invoice_date',
	        array('name' => 'branch_id','value' => '$data->branch->branch_name'),
                array('name' => 'employee_id','value' => '$data->employee->employee_name'),		
		array('name' => 'car_id','value' => '$data->carstbl->chass_no'),
		array('name' => 'customer_id','value' => '$data->customer->customer_name'),		
		'finance_type',
            /*
		'cach_price',
		'downpayment',
		'monthly_premium',
		'months_count',
		'interest_rate',
		'bank_id',
		'transfer_amount',
		'bank_down_amount',
		'expenses',
             */		
                array('name' => 'insurance_comp_id','value' => '$data->insuranceComp->insurance_comp_name'),
		'insurance_type',
		'insurance_amount',
		'insurance_rate',
                'confirm_stat',
		//'notes',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
