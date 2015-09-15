<?php
/* @var $this HoldtblController */
/* @var $data Holdtbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('hold_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hold_id), array('view', 'id'=>$data->hold_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hold_date')); ?>:</b>
	<?php echo CHtml::encode($data->hold_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_type')); ?>:</b>
	<?php echo CHtml::encode($data->sale_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hold_amount')); ?>:</b>
	<?php echo CHtml::encode($data->hold_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>