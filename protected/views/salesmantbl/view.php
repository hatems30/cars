<?php
/* @var $this SalesmantblController */
/* @var $model Salesmantbl */

$this->breadcrumbs=array(
	'Salesmantbls'=>array('index'),
	$model->sales_man_id,
);

$this->menu=array(
	array('label'=>'List Sales Man', 'url'=>array('index')),
	array('label'=>'Create Sales Man', 'url'=>array('create')),
	array('label'=>'Update Sales Man', 'url'=>array('update', 'id'=>$model->sales_man_id)),
	array('label'=>'Delete Sales Man', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sales_man_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sales Man', 'url'=>array('admin')),
);
?>

<h1>View Sales Man #<?php echo $model->sales_man_id; ?></h1>

<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>          $model,
	'attributes'=>array(
		'sales_man_id',
		'sales_man_name' ,		                
                'branch_id',
		'manager_id',
	),
)); ?>
