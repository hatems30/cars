<?php
/* @var $this LicensetblController */
/* @var $data Licensetbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('License_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->License_id), array('view', 'id'=>$data->License_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traffic_id')); ?>:</b>
	<?php echo CHtml::encode($data->traffic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('super_employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->super_employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>