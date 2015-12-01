<?php
/* @var $this PaperstblController */
/* @var $data Paperstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('paper_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->paper_id), array('view', 'id'=>$data->paper_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paper_date')); ?>:</b>
	<?php echo CHtml::encode($data->paper_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paper_type')); ?>:</b>
	<?php echo CHtml::encode($data->paper_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->to_branch_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('paper_status')); ?>:</b>
	<?php echo CHtml::encode($data->paper_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>