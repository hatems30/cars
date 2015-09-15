<?php
/* @var $this HoldtblController */
/* @var $model Holdtbl */

$this->breadcrumbs=array(
	'Holdtbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Holdtbl', 'url'=>array('index')),
	array('label'=>'Create Holdtbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#holdtbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">حجز سيارة</font></b></div>                          
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'holdtbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'hold_id',
		'hold_date',
		array('name' => 'branch_id','value' => '$data->branch->branch_name'), 
		array('name' => 'employee_id','value' => '$data->employee->employee_name'), 
		array('name' => 'customer_id','value' => '$data->customer->customer_name'), 
		array('name' => 'car_id','value' => '$data->car->chass_no'), 		
		'sale_type',
		'price',
		'hold_amount',
		'notes',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>