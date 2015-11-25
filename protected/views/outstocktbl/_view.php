<?php
/* @var $this OutstocktblController */
/* @var $data Outstocktbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->car_id), array('view', 'id'=>$data->car_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('section_id')); ?>:</b>
	<?php echo CHtml::encode($data->section_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_name')); ?>:</b>
	<?php echo CHtml::encode($data->car_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_color')); ?>:</b>
	<?php echo CHtml::encode($data->car_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_price')); ?>:</b>
	<?php echo CHtml::encode($data->car_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>