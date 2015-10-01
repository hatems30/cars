<?php
/* @var $this UserpertblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Userpertbls',
);

$this->menu=array(
	array('label'=>'Create Userpertbl', 'url'=>array('create')),
	array('label'=>'Manage Userpertbl', 'url'=>array('admin')),
);
?>

<h1>Userpertbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
