<?php
/* @var $this OmanController */
/* @var $model Oman */

$this->breadcrumbs=array(
	'Omen'=>array('index'),
	$model->oman_id=>array('view','id'=>$model->oman_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Oman', 'url'=>array('index')),
	array('label'=>'Create Oman', 'url'=>array('create')),
	array('label'=>'View Oman', 'url'=>array('view', 'id'=>$model->oman_id)),
	array('label'=>'Manage Oman', 'url'=>array('admin')),
);
?>

<h1>Update Oman <?php echo $model->oman_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>