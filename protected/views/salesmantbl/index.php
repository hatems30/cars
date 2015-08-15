<?php
/* @var $this SalesmantblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salesmantbls',
);

$this->menu=array(
	array('label'=>'Create Salesmantbl', 'url'=>array('create')),
	array('label'=>'Manage Salesmantbl', 'url'=>array('admin')),
);
?>

<h1>Salesmantbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
