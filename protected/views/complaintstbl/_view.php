<?php
/* @var $this ComplaintstblController */
/* @var $data Complaintstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaint_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->complaint_id), array('view', 'id'=>$data->complaint_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaint_date')); ?>:</b>
	<?php echo CHtml::encode($data->complaint_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_data')); ?>:</b>
	<?php echo CHtml::encode($data->car_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaint_detail')); ?>:</b>
	<?php echo CHtml::encode($data->complaint_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>