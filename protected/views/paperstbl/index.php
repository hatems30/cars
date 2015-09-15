<?php
/* @var $this PaperstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paperstbls',
);

$this->menu=array(
	array('label'=>'Create Paperstbl', 'url'=>array('create')),
	array('label'=>'Manage Paperstbl', 'url'=>array('admin')),
);
?>

<h1>Paperstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
