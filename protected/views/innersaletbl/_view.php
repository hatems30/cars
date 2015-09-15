<?php
/* @var $this InnersaletblController */
/* @var $data Innersaletbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('trs_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->trs_id), array('view', 'id'=>$data->trs_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trs_date')); ?>:</b>
	<?php echo CHtml::encode($data->trs_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->from_branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->to_branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />


</div>