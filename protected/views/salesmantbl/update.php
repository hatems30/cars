<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Salesmantbls'=>array('index'),
	$model->sales_man_id=>array('view','id'=>$model->sales_man_id),
	'Update',
);
?>

<h1 class="ar"><?php echo Yii::t("data","Update Salesmantbl");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>