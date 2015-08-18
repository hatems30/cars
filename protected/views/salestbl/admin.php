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

<h1>Manage Salestbls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salestbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'invoice_id',
		'invoice_date',
                array('name' => 'branch_id','value' => '$data->branch->branch_name'),
                array('name' => 'sales_man_id','value' => '$data->salesmantbl->sales_man_name'),
                array('name' => 'car_id','value' => '$data->carstbl->chass_no'),		
                array('name' => 'customer_id','value' => '$data->customers->customer_name'),
            /*
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
             * 
             */
		'notes',
		
		array(
			'class'=>'CButtonColumn',
      
                    
		),
	),
)); ?>
