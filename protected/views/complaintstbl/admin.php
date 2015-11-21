<?php
/* @var $this ComplaintstblController */
/* @var $model Complaintstbl */

$this->breadcrumbs=array(
	'Complaintstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Complaintstbl', 'url'=>array('index')),
	array('label'=>'Create Complaintstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#complaintstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
            <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">شكاوى</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'complaintstbl-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'complaint_id',
		'complaint_date',
                array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		array('name' => 'employee_id','value' => '$data->employee->employee_name'),		
		'customer_name',
		'car_data',
		'complaint_detail',
		/*
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>