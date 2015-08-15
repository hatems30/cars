<?php
/* @var $this BanksController */
/* @var $model Banks */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	$model->bank_id=>array('view','id'=>$model->bank_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Banks', 'url'=>array('index')),
	array('label'=>'Create Banks', 'url'=>array('create')),
	array('label'=>'View Banks', 'url'=>array('view', 'id'=>$model->bank_id)),
	array('label'=>'Manage Banks', 'url'=>array('admin')),
);
?>

<h1>Update Banks <?php echo $model->bank_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>