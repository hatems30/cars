<?php
/* @var $this CarpricetblController */
/* @var $data Carpricetbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->price_id), array('view', 'id'=>$data->price_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_price')); ?>:</b>
	<?php echo CHtml::encode($data->cost_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('off_price')); ?>:</b>
	<?php echo CHtml::encode($data->off_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_price_from')); ?>:</b>
	<?php echo CHtml::encode($data->sale_price_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_price_to')); ?>:</b>
	<?php echo CHtml::encode($data->sale_price_to); ?>
	<br />


</div>