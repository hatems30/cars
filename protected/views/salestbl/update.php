<?php
/* @var $this SalestblController */
/* @var $model Salestbl */

$this->breadcrumbs=array(
	'Salestbls'=>array('index'),
	$model->invoice_id=>array('view','id'=>$model->invoice_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salestbl', 'url'=>array('index')),
	array('label'=>'Create Salestbl', 'url'=>array('create')),
	array('label'=>'View Salestbl', 'url'=>array('view', 'id'=>$model->invoice_id)),
	array('label'=>'Manage Salestbl', 'url'=>array('admin')),
);
?>

<h1>Update Salestbl <?php echo $model->invoice_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>