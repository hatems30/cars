<?php
/* @var $this ServicetblController */
/* @var $data Servicetbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->service_id), array('view', 'id'=>$data->service_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_date')); ?>:</b>
	<?php echo CHtml::encode($data->service_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_type')); ?>:</b>
	<?php echo CHtml::encode($data->service_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>