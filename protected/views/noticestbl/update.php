<?php
/* @var $this NoticestblController */
/* @var $model Noticestbl */

$this->breadcrumbs=array(
	'Noticestbls'=>array('index'),
	$model->notice_id=>array('view','id'=>$model->notice_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Noticestbl', 'url'=>array('index')),
	array('label'=>'Create Noticestbl', 'url'=>array('create')),
	array('label'=>'View Noticestbl', 'url'=>array('view', 'id'=>$model->notice_id)),
	array('label'=>'Manage Noticestbl', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>