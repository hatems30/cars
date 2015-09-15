<?php
/* @var $this CarcodeController */
/* @var $model Carcode */

$this->breadcrumbs=array(
	'Carcodes'=>array('index'),
	$model->code_id,
);

$this->menu=array(
	array('label'=>'List Carcode', 'url'=>array('index')),
	array('label'=>'Create Carcode', 'url'=>array('create')),
	array('label'=>'Update Carcode', 'url'=>array('update', 'id'=>$model->code_id)),
	array('label'=>'Delete Carcode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carcode', 'url'=>array('admin')),
);
?>

<h1>View Carcode #<?php echo $model->code_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code_id',
		'code_name',
		array('name' => 'brand_id','value' => $model->brand->brand_name),
		array('name' => 'model_id','value' => $model->model->model_name),
		'code_01',
		'code_02',
		'code_03',
		'code_04',
		'code_05',
		'code_06',
		'code_07',
		'code_08',
		'code_09',
		'code_10',
		'code_11',
		'code_12',
		'code_13',
		'code_14',
		'code_15',
		'code_16',
		'code_17',
		'code_18',
		'code_19',
		'code_20',
		'code_21',
		'code_22',
		'code_23',
		'code_24',
		'code_25',
		'code_26',
		'code_27',
		'code_28',
		'code_29',
		'code_30',
		'code_31',
		'code_32',
		'code_33',
		'code_34',
		'code_35',
		'code_36',
		'code_37',
		'code_38',
		'code_39',
		'code_40',
	),
)); ?>
