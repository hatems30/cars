<?php
/* @var $this SalestblController */
/* @var $data Salestbl */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->invoice_id), array('view', 'id'=>$data->invoice_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_date')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->Branch->branch_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_man_id')); ?>:</b>
	<?php echo CHtml::encode($data->salesmantbl->sales_man_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->carstbl->chass_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customers->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finance_type')); ?>:</b>
	<?php echo CHtml::encode($data->finance_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cach_price')); ?>:</b>
	<?php echo CHtml::encode($data->cach_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('downpayment')); ?>:</b>
	<?php echo CHtml::encode($data->downpayment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_premium')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_premium); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('months_count')); ?>:</b>
	<?php echo CHtml::encode($data->months_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interest_rate')); ?>:</b>
	<?php echo CHtml::encode($data->interest_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_id')); ?>:</b>
	<?php echo CHtml::encode($data->bank_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer_amount')); ?>:</b>
	<?php echo CHtml::encode($data->transfer_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_down_amount')); ?>:</b>
	<?php echo CHtml::encode($data->bank_down_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenses')); ?>:</b>
	<?php echo CHtml::encode($data->expenses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_comp_id')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_comp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_type')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_amount')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance_rate')); ?>:</b>
	<?php echo CHtml::encode($data->insurance_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>