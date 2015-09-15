<?php
/* @var $this InnersaletblController */
/* @var $model Innersaletbl */

$this->breadcrumbs=array(
	'Innersaletbls'=>array('index'),
	$model->trs_id,
);

$this->menu=array(
	array('label'=>'List Innersaletbl', 'url'=>array('index')),
	array('label'=>'Create Innersaletbl', 'url'=>array('create')),
	array('label'=>'Update Innersaletbl', 'url'=>array('update', 'id'=>$model->trs_id)),
	array('label'=>'Delete Innersaletbl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->trs_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Innersaletbl', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'trs_id',
		'trs_date',		
                array('name' => 'from_branch_id','value' => $model->fromBranch->branch_name),
		array('name' => 'to_branch_id','value' => $model->toBranch->branch_name),
		array('name' => 'car_id','value' => $model->car->chass_no),
		'price',
	),
)); ?>
