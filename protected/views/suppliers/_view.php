<?php
/* @var $this SuppliersController */
/* @var $data Suppliers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->supplier_id), array('view', 'id'=>$data->supplier_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_name')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_name); ?>
	<br />


</div>