<?php
/* @var $this MaintenancetblController */
/* @var $data Maintenancetbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_hold_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->m_hold_id), array('view', 'id'=>$data->m_hold_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_hold_date')); ?>:</b>
	<?php echo CHtml::encode($data->m_hold_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_data')); ?>:</b>
	<?php echo CHtml::encode($data->car_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_type')); ?>:</b>
	<?php echo CHtml::encode($data->m_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_center_id')); ?>:</b>
	<?php echo CHtml::encode($data->m_center_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_date')); ?>:</b>
	<?php echo CHtml::encode($data->m_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('m_area')); ?>:</b>
	<?php echo CHtml::encode($data->m_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>