<?php
/* @var $this LicensetblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Licensetbls',
);

$this->menu=array(
	array('label'=>'Create Licensetbl', 'url'=>array('create')),
	array('label'=>'Manage Licensetbl', 'url'=>array('admin')),
);
?>

<h1>Licensetbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
