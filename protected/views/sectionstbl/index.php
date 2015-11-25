<?php
/* @var $this SectionstblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sectionstbls',
);

$this->menu=array(
	array('label'=>'Create Sectionstbl', 'url'=>array('create')),
	array('label'=>'Manage Sectionstbl', 'url'=>array('admin')),
);
?>

<h1>Sectionstbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
