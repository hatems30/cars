<?php
/* @var $this CompanysalestblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Companysalestbls',
);

$this->menu=array(
	array('label'=>'Create Companysalestbl', 'url'=>array('create')),
	array('label'=>'Manage Companysalestbl', 'url'=>array('admin')),
);
?>

<h1>Companysalestbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
