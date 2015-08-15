<?php
/* @var $this SalesmantblController */
/* @var $model Salesmantbl */

$this->breadcrumbs=array(
	'Salesmantbls'=>array('index'),
	$model->sales_man_id=>array('view','id'=>$model->sales_man_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salesmantbl', 'url'=>array('index')),
	array('label'=>'Create Salesmantbl', 'url'=>array('create')),
	array('label'=>'View Salesmantbl', 'url'=>array('view', 'id'=>$model->sales_man_id)),
	array('label'=>'Manage Salesmantbl', 'url'=>array('admin')),
);
?>

<h1>Update Salesmantbl <?php echo $model->sales_man_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>