<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	$model->bank_id=>array('view','id'=>$model->bank_id),
	'Update',
);
?>
<h1 class="ar"><?php echo Yii::t("data","Banks");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>