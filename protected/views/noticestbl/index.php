<?php
/* @var $this NoticestblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Noticestbls',
);

$this->menu=array(
	array('label'=>'Create Noticestbl', 'url'=>array('create')),
	array('label'=>'Manage Noticestbl', 'url'=>array('admin')),
);
?>

<h1>Noticestbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
