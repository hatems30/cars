<?php
/* @var $this ComplaintstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Complaintstbls',
);

$this->menu=array(
	array('label'=>'Create Complaintstbl', 'url'=>array('create')),
	array('label'=>'Manage Complaintstbl', 'url'=>array('admin')),
);
?>

<h1>Complaintstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
