<?php
/* @var $this CarstblController */
/* @var $data Carstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->car_id), array('view', 'id'=>$data->car_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_id')); ?>:</b>
	<?php echo CHtml::encode($data->model_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color_id')); ?>:</b>
	<?php echo CHtml::encode($data->color_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chass_no')); ?>:</b>
	<?php echo CHtml::encode($data->chass_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motor_no')); ?>:</b>
	<?php echo CHtml::encode($data->motor_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('off_price')); ?>:</b>
	<?php echo CHtml::encode($data->off_price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_price')); ?>:</b>
	<?php echo CHtml::encode($data->cost_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_price')); ?>:</b>
	<?php echo CHtml::encode($data->sale_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_code')); ?>:</b>
	<?php echo CHtml::encode($data->car_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_spec')); ?>:</b>
	<?php echo CHtml::encode($data->car_spec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
	<?php echo CHtml::encode($data->store_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />

	*/ ?>

</div>