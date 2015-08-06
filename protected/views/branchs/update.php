<?php
/* @var $this BranchsController */
/* @var $model Branchs */

$this->breadcrumbs=array(
	'Branchs'=>array('index'),
	$model->branch_id=>array('view','id'=>$model->branch_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Branchs', 'url'=>array('index')),
	array('label'=>'Create Branchs', 'url'=>array('create')),
	array('label'=>'View Branchs', 'url'=>array('view', 'id'=>$model->branch_id)),
	array('label'=>'Manage Branchs', 'url'=>array('admin')),
);
?>

<h1>Update Branchs <?php echo $model->branch_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>