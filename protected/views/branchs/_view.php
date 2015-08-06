<?php
/* @var $this BranchsController */
/* @var $data Branchs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->branch_id), array('view', 'id'=>$data->branch_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_name')); ?>:</b>
	<?php echo CHtml::encode($data->branch_name); ?>
	<br />


</div>