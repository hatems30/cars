<?php
/* @var $this MaintenancetblController */
/* @var $model Maintenancetbl */

$this->breadcrumbs=array(
	'Maintenancetbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Maintenancetbl', 'url'=>array('index')),
	array('label'=>'Create Maintenancetbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#maintenancetbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">حجز صيانة</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maintenancetbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'm_hold_id',
		'm_hold_date',
		'customer_name',
		'car_data',
		'm_type',
		'm_center_id',
		
		'm_date',
		'm_area',
		//'notes',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
