<?php
/* @var $this HowtblController */
/* @var $data Howtbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->how_id), array('view', 'id'=>$data->how_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_name')); ?>:</b>
	<?php echo CHtml::encode($data->how_name); ?>
	<br />


</div>