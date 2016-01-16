<?php
/* @var $this LicensetblController */
/* @var $model Licensetbl */

$this->breadcrumbs=array(
	'Licensetbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Licensetbl', 'url'=>array('index')),
	array('label'=>'Create Licensetbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#licensetbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">التراخيص</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>
<?php 
$user = Yii::app()->user->username;
$user_data = User::model()->findByAttributes(array('username'=>$user));
$id = $user_data['branch_id'];
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'licensetbl-grid',
	'dataProvider'=>$model->search($id),
	//'filter'=>$model,
	'columns'=>array(
		'License_id',
		array('name' => 'branch_id','value' => '$data->branch->branch_name'),
		array('name' => 'car_id','value' => '$data->car->chass_no'),
                'license_date',
		array('name' => 'employee_id','value' => '$data->employee->employee_name'),
		array('name' => 'traffic_id','value' => '$data->traffic->traffic_name'),
                array('name' => 'super_employee_id','value' => '$data->employee->employee_name'),		
		/*
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>