<?php
/* @var $this ColorsController */
/* @var $model Colors */

$this->breadcrumbs=array(
	'Inscomps'=>array('index'),
	$model->insurance_comp_id=>array('view','id'=>$model->insurance_comp_id),
	'Update',
);


?>

<h1 class="ar"><?php echo Yii::t("data","Inscomps");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>