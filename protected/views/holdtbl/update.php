<?php
/* @var $this HoldtblController */
/* @var $model Holdtbl */

$this->breadcrumbs=array(
	'Holdtbls'=>array('index'),
	$model->hold_id=>array('view','id'=>$model->hold_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Holdtbl', 'url'=>array('index')),
	array('label'=>'Create Holdtbl', 'url'=>array('create')),
	array('label'=>'View Holdtbl', 'url'=>array('view', 'id'=>$model->hold_id)),
	array('label'=>'Manage Holdtbl', 'url'=>array('admin')),
);
?>

<h1>Update Holdtbl <?php echo $model->hold_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>