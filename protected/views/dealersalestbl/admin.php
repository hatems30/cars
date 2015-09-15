<?php
/* @var $this DealersalestblController */
/* @var $model Dealersalestbl */

$this->breadcrumbs=array(
	'Dealersalestbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dealersalestbl', 'url'=>array('index')),
	array('label'=>'Create Dealersalestbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dealersalestbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">مبيعات الموزعين</font></b></div>           
               
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dealersalestbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'invoice_id',
		'invoice_date',
		array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		array('name' => 'employee_id','value' => '$data->employee->employee_name'),
		array('name' => 'dealer_id','value' => '$data->dealer->dealer_name'),
		array('name' => 'car_id','value' => '$data->car->chass_no'),		
		'price',
		//'notes',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
