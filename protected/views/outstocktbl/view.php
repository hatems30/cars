<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */

$this->breadcrumbs=array(
	'Outstocktbls'=>array('index'),
	$model->car_id,
);

$this->menu=array(
	array('label'=>'List Outstocktbl', 'url'=>array('index')),
	array('label'=>'Create Outstocktbl', 'url'=>array('create')),
	array('label'=>'Update Outstocktbl', 'url'=>array('update', 'id'=>$model->car_id)),
	array('label'=>'Delete Outstocktbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->car_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Outstocktbl', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'car_id',		
                array('name' => 'section_id','value' => $model->section->section_name),
		'car_name',
		'car_color',
		'car_price',
	//	'image',
		'notes',
	),
)); ?>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/test/out/'.$model->image,"image",array("width"=>300)); ?>

