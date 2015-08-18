<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Supplier'=>array('index'),
	$model->supplier_id=>array('view','id'=>$model->supplier_id),
	'Update',
);
?>
<h1 class="ar"><?php echo Yii::t("data","Supplier");?></h1>

<div class="row">
    <div class="col-sm-12">
        <div class="the-box">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>