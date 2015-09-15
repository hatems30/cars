<?php
/* @var $this CarmodelController */
/* @var $data Carmodel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->model_id), array('view', 'id'=>$data->model_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_name')); ?>:</b>
	<?php echo CHtml::encode($data->model_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />


</div>