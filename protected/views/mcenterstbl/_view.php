<?php
/* @var $this McenterstblController */
/* @var $data Mcenterstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_center_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->m_center_id), array('view', 'id'=>$data->m_center_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_center_name')); ?>:</b>
	<?php echo CHtml::encode($data->m_center_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>