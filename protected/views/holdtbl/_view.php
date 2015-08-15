<?php
/* @var $this HoldtblController */
/* @var $data Holdtbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('hold_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hold_id), array('view', 'id'=>$data->hold_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_man_id')); ?>:</b>
	<?php echo CHtml::encode($data->sales_man_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>