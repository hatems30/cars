<?php
/* @var $this VisitstblController */
/* @var $data Visitstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('visit_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->visit_id), array('view', 'id'=>$data->visit_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visit_date')); ?>:</b>
	<?php echo CHtml::encode($data->visit_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_data')); ?>:</b>
	<?php echo CHtml::encode($data->car_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_comment')); ?>:</b>
	<?php echo CHtml::encode($data->emp_comment); ?>
	<br />


</div>