<?php
/* @var $this UserpertblController */
/* @var $data Userpertbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->per_id), array('view', 'id'=>$data->per_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('controller_id')); ?>:</b>
	<?php echo CHtml::encode($data->controller_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_type')); ?>:</b>
	<?php echo CHtml::encode($data->per_type); ?>
	<br />


</div>