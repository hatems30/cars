<?php
/* @var $this NoticestblController */
/* @var $data Noticestbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('notice_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->notice_id), array('view', 'id'=>$data->notice_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes_date')); ?>:</b>
	<?php echo CHtml::encode($data->notes_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />


</div>