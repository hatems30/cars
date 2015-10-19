<?php
/* @var $this PaperstblController */
/* @var $model Paperstbl */

$this->breadcrumbs=array(
	'Paperstbls'=>array('index'),
	$model->paper_id,
);

$this->menu=array(
	array('label'=>'List Paperstbl', 'url'=>array('index')),
	array('label'=>'Create Paperstbl', 'url'=>array('create')),
	array('label'=>'Update Paperstbl', 'url'=>array('update', 'id'=>$model->paper_id)),
	array('label'=>'Delete Paperstbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->paper_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paperstbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'paper_id',
		'paper_date',
		array('name' => 'branch_id','value' => $model->branch->branch_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		array('name' => 'supplier_id','value' => $model->supplier->supplier_name),
		'paper_status',
		'notes',
	),
)); ?>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/'.$model->image,"image",array("width"=>200)); ?>