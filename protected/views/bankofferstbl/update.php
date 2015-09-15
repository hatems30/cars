<?php
/* @var $this BankofferstblController */
/* @var $model Bankofferstbl */

$this->breadcrumbs=array(
	'Bankofferstbls'=>array('index'),
	$model->offer_id=>array('view','id'=>$model->offer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bankofferstbl', 'url'=>array('index')),
	array('label'=>'Create Bankofferstbl', 'url'=>array('create')),
	array('label'=>'View Bankofferstbl', 'url'=>array('view', 'id'=>$model->offer_id)),
	array('label'=>'Manage Bankofferstbl', 'url'=>array('admin')),
);
?>

<h1>Update Bankofferstbl <?php echo $model->offer_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>