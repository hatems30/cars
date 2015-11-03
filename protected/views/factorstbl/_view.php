<?php
/* @var $this FactorstblController */
/* @var $data Factorstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('factor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->factor_id), array('view', 'id'=>$data->factor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cach_factor')); ?>:</b>
	<?php echo CHtml::encode($data->cach_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('premium_factor')); ?>:</b>
	<?php echo CHtml::encode($data->premium_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dealer_factor')); ?>:</b>
	<?php echo CHtml::encode($data->dealer_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_factor')); ?>:</b>
	<?php echo CHtml::encode($data->company_factor); ?>
	<br />


</div>