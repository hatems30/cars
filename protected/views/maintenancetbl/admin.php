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

<?php 
$user = Yii::app()->user->username;
$user_data = User::model()->findByAttributes(array('username'=>$user));
$id = $user_data['branch_id'];
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maintenancetbl-grid',
	'dataProvider'=>$model->search($id),
	'filter'=>$model,
	'columns'=>array(
		'm_hold_id',
		'm_hold_date',		
                array('name' => 'branch_id','value' => '$data->branch->branch_name'),
                array('name' => 'customer_id','value' => '$data->customer->customer_name'),
		'car_data',
		'm_type',		
                array('name' => 'm_center_id','value' => '$data->mCenter->m_center_name'),
		'm_date',
                array('name' => 'employee_id','value' => '$data->employee->employee_name'),
		'notes',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
