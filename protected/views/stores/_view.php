<?php
/* @var $this StoresController */
/* @var $data Stores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->store_id), array('view', 'id'=>$data->store_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_name')); ?>:</b>
	<?php echo CHtml::encode($data->store_name); ?>
	<br />


</div>