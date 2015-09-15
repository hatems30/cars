<?php
/* @var $this EmployeesController */
/* @var $data Employees */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee_id), array('view', 'id'=>$data->employee_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_name')); ?>:</b>
	<?php echo CHtml::encode($data->employee_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_type')); ?>:</b>
	<?php echo CHtml::encode($data->employee_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manager_id')); ?>:</b>
	<?php echo CHtml::encode($data->manager_id); ?>
	<br />


</div>