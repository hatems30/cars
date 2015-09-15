<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->brand_id,
);

$this->menu=array(
	
	array('label'=>'Create Brands', 'url'=>array('create')),
	array('label'=>'Update Brands', 'url'=>array('update', 'id'=>$model->brand_id)),
	array('label'=>'Delete Brands', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->brand_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brands', 'url'=>array('admin')),
);
?>


<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'brand_id',
		'brand_name',
	),
       
)); ?>

</div>
