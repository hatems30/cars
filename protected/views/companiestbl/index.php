<?php
/* @var $this CompaniestblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Companiestbls',
);

$this->menu=array(
	array('label'=>'Create Companiestbl', 'url'=>array('create')),
	array('label'=>'Manage Companiestbl', 'url'=>array('admin')),
);
?>

<h1>Companiestbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
