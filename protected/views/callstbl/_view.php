<?php
/* @var $this CallstblController */
/* @var $data Callstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->call_id), array('view', 'id'=>$data->call_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_date')); ?>:</b>
	<?php echo CHtml::encode($data->call_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_time')); ?>:</b>
	<?php echo CHtml::encode($data->call_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_data')); ?>:</b>
	<?php echo CHtml::encode($data->car_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->call_employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer')); ?>:</b>
	<?php echo CHtml::encode($data->customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('service_employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->service_employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how')); ?>:</b>
	<?php echo CHtml::encode($data->how); ?>
	<br />

	*/ ?>

</div>