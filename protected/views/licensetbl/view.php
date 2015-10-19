<?php
/* @var $this LicensetblController */
/* @var $model Licensetbl */

$this->breadcrumbs=array(
	'Licensetbls'=>array('index'),
	$model->License_id,
);

$this->menu=array(
	array('label'=>'List Licensetbl', 'url'=>array('index')),
	array('label'=>'Create Licensetbl', 'url'=>array('create')),
	array('label'=>'Update Licensetbl', 'url'=>array('update', 'id'=>$model->License_id)),
	array('label'=>'Delete Licensetbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->License_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Licensetbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'License_id',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		array('name' => 'employee_id','value' => $model->employee->employee_name),
		array('name' => 'traffic_id','value' => $model->traffic->traffic_name),
                array('name' => 'super_employee_id','value' => $model->employee->employee_name),
		'notes',
	),
)); ?>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>200)); ?>
