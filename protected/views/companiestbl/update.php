<?php
/* @var $this CompaniestblController */
/* @var $model Companiestbl */

$this->breadcrumbs=array(
	'Companiestbls'=>array('index'),
	$model->company_id=>array('view','id'=>$model->company_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Companiestbl', 'url'=>array('index')),
	array('label'=>'Create Companiestbl', 'url'=>array('create')),
	array('label'=>'View Companiestbl', 'url'=>array('view', 'id'=>$model->company_id)),
	array('label'=>'Manage Companiestbl', 'url'=>array('admin')),
);
?>

<h1>Update Companiestbl <?php echo $model->company_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>