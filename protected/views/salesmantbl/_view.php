<?php
/* @var $this SalesmantblController */
/* @var $data Salesmantbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_man_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sales_man_id), array('view', 'id'=>$data->sales_man_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_man_name')); ?>:</b>
	<?php echo CHtml::encode($data->sales_man_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->Branch->branch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manager_id')); ?>:</b>
	<?php echo CHtml::encode($data->manager->sales_man_name); ?>
	<br />


</div>