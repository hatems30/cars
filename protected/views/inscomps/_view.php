<?php
/* @var $this InscompsController */
/* @var $data Inscomps */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_comp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->insurance_comp_id), array('view', 'id'=>$data->insurance_comp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_comp_name')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_comp_name); ?>
	<br />


</div>