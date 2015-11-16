<?php
/* @var $this CallstblController */
/* @var $model Callstbl */

$this->breadcrumbs=array(
	'Callstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Callstbl', 'url'=>array('index')),
	array('label'=>'Create Callstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#callstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">المكالمات</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'callstbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'call_id',
		'call_date',
		'call_time',
                array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		'car_data',		
                array('name' => 'call_employee_id','value' => '$data->callsman->employee_name'),	
		'customer',		
		'mobile',		
                array('name' => 'service_employee_id','value' => '$data->serviceman->employee_name'),	 
		'area',
		array('name' => 'how_id','value' => '$data->howtbl->how_name'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>