<?php
/* @var $this UserpertblController */
/* @var $model Userpertbl */

$this->breadcrumbs=array(
	'Userpertbls'=>array('index'),
	$model->per_id=>array('view','id'=>$model->per_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userpertbl', 'url'=>array('index')),
	array('label'=>'Create Userpertbl', 'url'=>array('create')),
	array('label'=>'View Userpertbl', 'url'=>array('view', 'id'=>$model->per_id)),
	array('label'=>'Manage Userpertbl', 'url'=>array('admin')),
);
?>

<h1>Update Userpertbl <?php echo $model->per_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>