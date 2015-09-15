<?php
/* @var $this TraffictblController */
/* @var $data Traffictbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('traffic_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->traffic_id), array('view', 'id'=>$data->traffic_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traffic_name')); ?>:</b>
	<?php echo CHtml::encode($data->traffic_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>