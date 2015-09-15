<?php
/* @var $this ServicetblController */
/* @var $model Servicetbl */

$this->breadcrumbs=array(
	'Servicetbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Servicetbl', 'url'=>array('index')),
	array('label'=>'Create Servicetbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#servicetbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



</div><!-- search-form -->
       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b>ماركات السيارات</b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'servicetbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'service_id',
		'service_date',
		'service_type',
		array('name' => 'customer_id','value' => '$data->customers->customer_name'),
                array('name' => 'car_id','value' => '$data->carstbl->chass_no'),		
		'notes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>