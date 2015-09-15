<?php
/* @var $this CarcodeController */
/* @var $data Carcode */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->code_id), array('view', 'id'=>$data->code_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_name')); ?>:</b>
	<?php echo CHtml::encode($data->code_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_id')); ?>:</b>
	<?php echo CHtml::encode($data->model_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_01')); ?>:</b>
	<?php echo CHtml::encode($data->code_01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_02')); ?>:</b>
	<?php echo CHtml::encode($data->code_02); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_03')); ?>:</b>
	<?php echo CHtml::encode($data->code_03); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('code_04')); ?>:</b>
	<?php echo CHtml::encode($data->code_04); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_05')); ?>:</b>
	<?php echo CHtml::encode($data->code_05); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_06')); ?>:</b>
	<?php echo CHtml::encode($data->code_06); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_07')); ?>:</b>
	<?php echo CHtml::encode($data->code_07); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_08')); ?>:</b>
	<?php echo CHtml::encode($data->code_08); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_09')); ?>:</b>
	<?php echo CHtml::encode($data->code_09); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_10')); ?>:</b>
	<?php echo CHtml::encode($data->code_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_11')); ?>:</b>
	<?php echo CHtml::encode($data->code_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_12')); ?>:</b>
	<?php echo CHtml::encode($data->code_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_13')); ?>:</b>
	<?php echo CHtml::encode($data->code_13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_14')); ?>:</b>
	<?php echo CHtml::encode($data->code_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_15')); ?>:</b>
	<?php echo CHtml::encode($data->code_15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_16')); ?>:</b>
	<?php echo CHtml::encode($data->code_16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_17')); ?>:</b>
	<?php echo CHtml::encode($data->code_17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_18')); ?>:</b>
	<?php echo CHtml::encode($data->code_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_19')); ?>:</b>
	<?php echo CHtml::encode($data->code_19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_20')); ?>:</b>
	<?php echo CHtml::encode($data->code_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_21')); ?>:</b>
	<?php echo CHtml::encode($data->code_21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_22')); ?>:</b>
	<?php echo CHtml::encode($data->code_22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_23')); ?>:</b>
	<?php echo CHtml::encode($data->code_23); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_24')); ?>:</b>
	<?php echo CHtml::encode($data->code_24); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_25')); ?>:</b>
	<?php echo CHtml::encode($data->code_25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_26')); ?>:</b>
	<?php echo CHtml::encode($data->code_26); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_27')); ?>:</b>
	<?php echo CHtml::encode($data->code_27); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_28')); ?>:</b>
	<?php echo CHtml::encode($data->code_28); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_29')); ?>:</b>
	<?php echo CHtml::encode($data->code_29); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_30')); ?>:</b>
	<?php echo CHtml::encode($data->code_30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_31')); ?>:</b>
	<?php echo CHtml::encode($data->code_31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_32')); ?>:</b>
	<?php echo CHtml::encode($data->code_32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_33')); ?>:</b>
	<?php echo CHtml::encode($data->code_33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_34')); ?>:</b>
	<?php echo CHtml::encode($data->code_34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_35')); ?>:</b>
	<?php echo CHtml::encode($data->code_35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_36')); ?>:</b>
	<?php echo CHtml::encode($data->code_36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_37')); ?>:</b>
	<?php echo CHtml::encode($data->code_37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_38')); ?>:</b>
	<?php echo CHtml::encode($data->code_38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_39')); ?>:</b>
	<?php echo CHtml::encode($data->code_39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_40')); ?>:</b>
	<?php echo CHtml::encode($data->code_40); ?>
	<br />

	*/ ?>

</div>