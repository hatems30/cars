<?php
/* @var $this OmanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Omen',
);

$this->menu=array(
	array('label'=>'Create Oman', 'url'=>array('create')),
	array('label'=>'Manage Oman', 'url'=>array('admin')),
);
?>

<h1>Omen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
