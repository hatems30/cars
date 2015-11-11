<?php
/* @var $this OutstocktblController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Outstocktbls',
);

$this->menu=array(
	array('label'=>'Create Outstocktbl', 'url'=>array('create')),
	array('label'=>'Manage Outstocktbl', 'url'=>array('admin')),
);
?>

<h1>Outstocktbls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
