<?php
/* @var $this DealerstblController */
/* @var $data Dealerstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dealer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dealer_id), array('view', 'id'=>$data->dealer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dealer_name')); ?>:</b>
	<?php echo CHtml::encode($data->dealer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>