<?php
/* @var $this BankofferstblController */
/* @var $data Bankofferstbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->offer_id), array('view', 'id'=>$data->offer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_id')); ?>:</b>
	<?php echo CHtml::encode($data->model_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_id')); ?>:</b>
	<?php echo CHtml::encode($data->code_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_id')); ?>:</b>
	<?php echo CHtml::encode($data->bank_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('banker')); ?>:</b>
	<?php echo CHtml::encode($data->banker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_status')); ?>:</b>
	<?php echo CHtml::encode($data->offer_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('results')); ?>:</b>
	<?php echo CHtml::encode($data->results); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>