<?php
/* @var $this BranchsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Branchs',
);

$this->menu=array(
	array('label'=>'Create Branchs', 'url'=>array('create')),
	array('label'=>'Manage Branchs', 'url'=>array('admin')),
);
?>

<h1>Branchs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
