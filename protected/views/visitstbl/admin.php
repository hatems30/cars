<?php
/* @var $this VisitstblController */
/* @var $model Visitstbl */

$this->breadcrumbs=array(
	'Visitstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Visitstbl', 'url'=>array('index')),
	array('label'=>'Create Visitstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visitstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">الزيارات</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visitstbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'visit_id',
		'visit_date',
                array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		'customer_name',
		'car_data',
		array('name' => 'employee_id','value' => '$data->employee->employee_name'),
		'emp_comment',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

       </div>
