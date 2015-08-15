<?php
/* @var $this OmanController */
/* @var $data Oman */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oman_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oman_id), array('view', 'id'=>$data->oman_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oman_name')); ?>:</b>
	<?php echo CHtml::encode($data->oman_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />


</div>